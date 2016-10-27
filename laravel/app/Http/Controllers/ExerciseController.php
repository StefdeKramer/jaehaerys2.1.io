<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ExerciseController extends Controller
{
    public function getHome()
    {
        //  $exercises = Exercise::all();
        $exercises = Exercise::where('active', true)->get();

        return view('home', ['exercises' => $exercises]);
    }

    public function getAccount()
    {
        $exercises = Exercise::where('user_id', Auth::user()->id)->get();

        return view('account', ['exercises' => $exercises]);
    }

    public function getWelcome()
    {
        $exercises = Exercise::where('active', true)
            ->take(3)
            ->get();
        return view('welcome', ['exercises' => $exercises]);
    }


    public function getCreateExercise()
    {
        return view('CreateExercise');
    }

    public function getEditExercise()
    {

        return view('EditExercise');
    }


    //Het verwijderen van een exercise
    public function getDeleteExercise($exercise_id)
    {
        $exercise = Exercise::find('id', $exercise_id)->first();
        if (Auth::user() != $exercise->user) {
            return redirect()->back();
        }
        $exercise->delete();
        return redirect()->route('account')->with(['message' => 'Successfully deleted!']);
    }

    public function postEditExercise(Request $request)
    {
        $exercise = Exercise::where($request['exercise_id'])->first();
        $this->validate($request, [
            'title' => 'required|max:50',
            'body' => 'required|max:1000',
            'musclegroups' => 'required'
        ]);
    
        $exercise->title = $request['title'];
        $exercise->body = $request['body'];
        $exercise->musclegroups = $request['musclegroups'];

        $exercise->update();

    }


    //Maak een exercise aan die wordt opgeslagen in de database
    public function postCreateExercise(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'body' => 'required|max:1000',
            'musclegroups' => 'required'
        ]);

        $exercise = new Exercise();
        $exercise->title = $request['title'];
        $exercise->body = $request['body'];
        $exercise->musclegroups = $request['musclegroups'];


        $message = 'There is an error';
        if ($request->user()->exercises()->save($exercise)) {
            $message = 'Exercise has been successfullly created';


        }
        return redirect()->route('home')->with(['message' => $message]);
    }
}

