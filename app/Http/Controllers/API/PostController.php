<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(
            Post::all()
        );
    }

    public function show()
    {
        $postId = request()->post;

        $post = Post::find($postId);

        return new PostResource($post);
    }
}
