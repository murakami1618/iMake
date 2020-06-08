<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class PostController extends Controller

{
    public function index(Request $request)
    {
        $posts = DB::table('posts')->find($request->id);
        //dd($posts);
        return view('post', ['posts' => $posts]);
    }



}
