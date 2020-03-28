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
        //get the model objects of Post
        $posts =  Post::all();
       
        //use the transfromation layer
        $postResource = PostResource::collection($posts); 
       
        //return the result of transformation layer
        return $postResource;
    }
    
}
