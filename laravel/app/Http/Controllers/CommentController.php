<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Exercise;

use App\Http\Requests;

class CommentController extends Controller
{
    
    public function getCreateComment(){
        return view('CreateComment');
    }
    public function postCreateComment(Request $request){
        $this->validate($request, [
            'title' => 'required|max:50',
            'body' => 'required|max:1000'

        ]);

        $comment = new Comment();
        $comment->title = $request['title'];
        $comment->body = $request['body'];

        $message = 'There is an error';
        if ($request->user()->comments()->save($comment)) {
            $message = 'Exercise has been successfullly created';
        }
        return redirect()->route('home')->with(['message' => $message]);
    }

}
