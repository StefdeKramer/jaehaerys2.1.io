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


    public function getEditExercise($id)
    {
        $exercise = Exercise::where('id', $id)->first();

        return view('EditExercise', ['exercises' => $exercise]);
    }


    public function postEditExercise(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'body' => 'required|max:1000',
            'musclegroups' => 'required'
        ]);


        $exercise = Exercise::find($request->exercise_id);

        $exercise->title = $request->title;
        $exercise->body = $request->body;
        $exercise->musclegroups = $request->musclegroups;


        $exercise->save();

        return redirect('account')->with('message', 'Is updated');

    }


    //Het verwijderen van een exercise
    public function getDeleteExercise($id)
    {
        $exercise = Exercise::where('id', $id)->first();
        if (Auth::user() != $exercise->user) {
            return redirect()->back();
        }

        $exercise->delete();


        return redirect()->route('account')->with(['message' => 'Successfully deleted!']);
    }


//    Het aanpassen van een active exercise naar een non active exercise
    public function SetNonActive($id)
    {
        $exercise = Exercise::where('id', $id)->first();
        $exercise->active = 0;
        $exercise->save();
        echo($exercise->active);
        return redirect()->route('account')->with(['message' => 'Successfully deleted!']);

    }

    public function SetActive($id)
    {
        $exercise = Exercise::where('id', $id)->first();
        $exercise->active = 1;
        $exercise->save();
        echo($exercise->active);
        return redirect()->route('account')->with(['message' => 'Successfully deleted!']);

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
        $user = Auth::user();
        if ($user->hasRole('Admin')) {
            return redirect()->route('home')->with(['message' => $message]);

        }
        if ($user->hasRole('User')) {
            return redirect()->route('home')->with(['message' => $message]);

        } else {
            $user->roles()->attach(Role::where('name', 'User')->first());
            return redirect()->route('home')->with(['message' => $message]);
        }

    }
}

