<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{
    public function like(Request $request, $post_id)
    {
        Like::updateOrCreate(
            ['user_id' =>  $request->user()->id, 'post_id' => $post_id],
            ['like' => 1]
    );

        return back();
    }

    public function dislike(Request $request, $post_id)
    {
        Like::updateOrCreate(
            ['user_id' =>  $request->user()->id, 'post_id' => $post_id],
            ['like' => 0]
        );

        return back();
    }
}
