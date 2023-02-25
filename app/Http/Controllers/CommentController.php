<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Model\Comment;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request, $post_id)
    {
        $comment = Comment::create($request->validated() +
            ['user_id' => $request->user()->id, 'post_id' => $post_id]);

        return redirect()->route('post.show', $post_id);
    }

    public function destroy($comment_id)
    {
        Gate::authorize('admin-level');
        $comment = Comment::findOrFail($comment_id);
        $comment->delete();

        return redirect()->back();
    }


}
