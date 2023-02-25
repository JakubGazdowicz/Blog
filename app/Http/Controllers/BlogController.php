<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('home', ['posts' => Post::with('comments')->with('likes')->orderByDesc('created_at')->paginate(3)]);
    }

    public function gallery(): View
    {
        return view('blog.gallery', ['posts' => Post::orderByDesc('created_at')->get()]);
    }

    public function contact(): View
    {
        return view('blog.contact');
    }

    public function show($id): View
    {
        $post = Post::findOrFail($id);

        return view('blog.single-post', [
            'post' => $post,
            'posts' => Post::orderByDesc('created_at')->get(),
            'comments' => $post->comments->sortByDesc('created_at'),
            'getLikes' => $post->likes->where('like', 1)->count(),
            'getDislikes' => $post->likes->where('like', 0)->count(),
        ]);
    }
}
