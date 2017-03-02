<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    //
    public function index()
    {
      $post = Post::all();
      return view('posts.index', compact('post'));
    }

    public function create()
    {
      return view('posts.create');
    }
    public function store()
    {
      # code...
      //dd(request('title'));
      //$post =  new Post;

      //$post->title =  request('title');
      //$post->body = request('body');

      //$post->save();

      //Post::create([
        //'title' => request('title'),
        //'body' => request('body')
      //]);

      Post::create(request( ['title', 'body']));

      return redirect('/');

    }
}
