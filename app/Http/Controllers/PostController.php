<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.

     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.

     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidationRequest $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect()->route('posts.index')->with(['success' =>"[ ". $post->title ." ] => is added successfully"]);
    }

    /**
     * Display the specified resource.
     *

     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect()->route('posts.index')->with(['success' =>"[ ". $post->title ." ] => is updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
    public function deleteAll()
    {
        $post = Post::query()->delete();
        // $post->delete();
        return redirect()->route('posts.index');
    }

    public function softDelete(){
        $posts=Post::onlyTrashed()->get();
        return view('posts.softDelet',compact('posts'));
    }
    public function restore($id){
        $post=Post::withTrashed()->find($id)->restore();
        return redirect()->route('posts.index')->with(['success' =>" Data is restored successfully"]);
    }
    public function forceDelete($id){
        $post=Post::withTrashed()->find($id)->forceDelete();
        return redirect()->route('posts.index');
    }
}
