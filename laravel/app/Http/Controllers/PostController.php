<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller

    //class PostController extends Controller
{

    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:posts|max:200',
            'first_name' => 'required',
            'password' => 'required'
        ]);

        /** If the validation fails, the proper response will automaticlly be generated. If the validation passes controller will be executed normally */
    }

}
