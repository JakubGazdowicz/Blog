<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Model\Post;
use Illuminate\View\View;

class AdminPanelController extends Controller
{
    public function index(): View
    {
        return view('adminPanel.adminPanel', ['posts' => Post::orderByDesc('created_at')->get()]);
    }

    public function store(StorePostRequest $request)
    {
        $path = $request->file('photo')->store('photos', 'public');

        $post = Post::create($request->validated() +
            ['user_id' => $request->user()->id, 'photo' => $path]);

        return redirect()->route('adminPanel.index');
    }

    public function edit($id): View
    {
        return view('adminPanel.adminPanelEdit', ['post' => Post::findOrFail($id)]);
    }

    public function update(UpdatePostRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        $path = $request->file('photo')->store('photos', 'public');

        $post->update($request->validated() +
            ['user_id' => $request->user()->id, 'photo' => $path]);

        return redirect()->route('adminPanel.index');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('adminPanel.index');
    }
}
