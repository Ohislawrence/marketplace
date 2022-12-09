<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\CommentNotification;
use Illuminate\Support\Facades\Notification;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
       
        if($request->comment)
        {
            $sent = Comment::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->productuuid,
                'comment'=> $request->comment,
            ]);


            $product = Product::where('slug', $request->productslug)->first();
            $user = User::find($product->user_id);

            $comment = [
                'name' => 'Hello '.$user->name,
                'body' => 'You have received a comment on your product, go to the link below to repy,',
                'thanks' => 'Thank you.',
                'actionText' => 'View Comment',
                'actionURL' => route('singleproduct.page', ['productslug' => $request->productslug ]),
                'product_id' => $request->productuuid
            ];
      
            Notification::send($user, new CommentNotification($comment));
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




    public function sendNotification()
    {
        $user = User::first();
  
        $comment = [
            'name' => 'Hello '.$user->name,
            'body' => 'You have received a comment on your product, go to the link below to repy,',
            'thanks' => 'Thank you.',
            'actionText' => 'View Comment',
            'actionURL' => url('/'),
            'product_id' => 101
        ];
  
        Notification::send($user, new CommentNotification($comment));
   
        dd('done');
    }
}
