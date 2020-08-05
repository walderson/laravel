<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostsController extends Controller
{
    function index()
    {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts/')->json();
        return view('posts', ['posts'=>$posts]);
    }
}
