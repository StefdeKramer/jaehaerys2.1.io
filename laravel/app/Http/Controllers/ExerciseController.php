<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ExerciseController extends Controller
{
    public function getHome(){
        $exercises = Exercise::all();
//        $exercises = Exercise::where('active', true);
        
        return view('home', ['exercises' => $exercises]);
    }
    
    public function getAccount(){
        $exercises = Exercise::all();

        return view('account', ['exercises' => $exercises]);
    }


    public function getCreateExercise(){
        return view('CreateExercise');
    }



    //Het verwijderen van een exercise
    public function getDeleteExercise($exercise_id){
        $exercise = Exercise::where('id', $exercise_id)->first();
        if (Auth::user() != $exercise->user) {
            return redirect()->back();
        }
        $exercise->delete();
        return redirect()->route('account')->with(['message' => 'Successfully deleted!']);
    }


    //Maak een exercise aan die wordt opgeslagen in de database
    public function postCreateExercise(Request $request){
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

