<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exercise;
use App\Http\Requests;

class SearchController extends Controller
{
//    public function search(){
//
//        return view('Search')   ;
////        $exercises = Exercise::where('active', true)->get();
////        return view('home', ['exercises' => $exercises]);
//
//    }

    public function searchExercise(Request $request){

        $exercises = Exercise::where('active', true)
            ->where('musclegroups', $request->input('musclegroups'))
            ->get();

        return view('searchResult', ['exercises' => $exercises]);

        
    }
    
}