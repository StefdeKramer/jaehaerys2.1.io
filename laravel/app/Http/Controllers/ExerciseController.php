<?php

namespace App\Http\Controllers;

use App\Exercise;

use Illuminate\Http\Request;


class ExerciseController extends Controller
{
    public function getHome(){
        $exercise = Exercise::all();
        return view('home', ['exercise' => $exercise]);
    }
    
    public function getCreateExercise(){
        return view('CreateExercise');
    }


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
//            $message = 'Exercise has been successfullly created';
        }
        return redirect()->route('home')->with(['message' => $message]);
    }
}

