<?php

namespace App\Http\Controllers;

use App\Model\Post;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::all();
        return view('index', compact('post'));
    }
    
    public function show($id)
    {
        $post = Post::findOrfail($id);
        return view('post.show', compact('post'));
    }

}

$post = Post::findOrFail(1);
$post = Post::where('slug', 'this is the first article')->first();
$post = Post::findorFail(1);
$post->title='this is a new title';
$post->save();
