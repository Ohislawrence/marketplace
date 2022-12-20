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
        { $slug  = $request->slug ;
            //dd($slug);
            $sent = Comment::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->productuuid,
                'comment'=> $request->comment,
            ]);


            $product = Product::where('id', $sent->product_id)->first();
            $user = User::find($product->user_id);

            $comment = [
                'name' => 'Hello '.$user->name,
                'body' => 'You have received a comment on your product, go to the link below to reply,',
                'thanks' => 'Thank you.',
                'actionText' => 'View Comment',
                'actionURL' => route('singleproduct.page', ['productslug' => $slug ]),
                'product_id' => $sent->product_id,
            ];

            $delay = now()->addMinutes(2);
            //Notification::send($user, new CommentNotification($comment));
            $user->notify((new CommentNotification($comment))->delay($delay));
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
