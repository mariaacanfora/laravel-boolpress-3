<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $postList = Post::all();

        return $postList;
    }
}
