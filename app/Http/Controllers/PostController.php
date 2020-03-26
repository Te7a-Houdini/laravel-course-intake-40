<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show()
    {
        //take the id from url param
        $request = request();
        $postId = $request->post;

        //query to retrieve the post by id
        $post = Post::find($postId);
        // $post = Post::where('id', $postId)->get();
        // $postSecond = Post::where('id', $postId)->first();

        //send the value to the view
        return view('posts.show',[
            'post' => $post,
        ]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create', [
            'users' => $users
        ]);
    }

    public function store()
    {
        //get the request data
        $request = request();

        //store the request data in the db
        Post::create([
            'title' => $request->title,
            'description' =>  $request->description,
            'user_id' =>  $request->user_id,
        ]);

        //redirect to /posts
        return redirect()->route('posts.index');
    }

}
