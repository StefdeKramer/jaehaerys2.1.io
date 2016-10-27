<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class SearchController extends Controller
{
    public function filter(Request $request, User $user){
        // Search for a user based on their name.
        if ($request->has('name')) {
            return $user->where('name', $request->input('name'))->get();
        }

        // Search for a user based on their company.
        if ($request->has('email')) {
            return $user->where('email', $request->input('email'))
                ->get();
               }

        return User::all();

    }
}
