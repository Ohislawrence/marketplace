<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        if($request->comment)
        {
            Comment::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->productuuid,
                'comment'=> $request->comment,
            ]);
        }


        if($request->reply)
        {
            Comment::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->productuuid,
                'comment'=> $request->reply,
                'comment_id' =>$request->comment_id,

            ]);
        }
        return back();
    }



    public function review(Request $request)
    {
        if($request->review)
        {
            Comment::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->productuuid,
                'comment'=> $request->review,
                'review' => $request->rate,
            ]);
        }


        if($request->reviewreply)
        {
            Comment::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->productuuid,
                'comment'=> $request->reviewreply,
                'comment_id' =>$request->comment_id,

            ]);
        }
        return back();
    }
}
