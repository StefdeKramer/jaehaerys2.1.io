<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Exercise;

use Illuminate\Support\Facades\Auth;


use App\Http\Requests;

class CommentController extends Controller
{

    public function getCreateComment($id)
    {

        $exercise = Exercise::where('id', $id)->first();

        return view('CreateComment', ['exercises' => $exercise]);

    }
    
    public function getComment(){
        $comment = Comment::all();
        return view('comment', ['comments' => $comment]);
    }


    public function postCreateComment(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'body' => 'required|max:1000'

        ]);

        $exercise = Exercise::find($request->exercise_id);

        $comment = new Comment();
        $comment->title = $request['title'];
        $comment->body = $request['body'];
        $comment->user_id = Auth::user()->id;
        $comment->exercise_id = $exercise->id;
        $comment->save();


        return redirect()->route('home');


    }

}
