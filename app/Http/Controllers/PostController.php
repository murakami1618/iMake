<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class PostController extends Controller

{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('post', ['posts' => $posts]);
    }

}
