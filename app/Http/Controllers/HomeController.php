<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
            $posts = DB::table('posts')->get();
            return view('home', ['posts' => $posts]);
    }

    // public function user_page(Request $request)
    // {
    //     $posts = DB::table('posts')->find($request->user_id);
    //     return view('post', ['posts' => $posts]);
    // }
    public function user_page(Request $request)
    {
        //dd($request->user_name);
        // $posts = DB::table('users')->find($request->user_name);
        //$posts = DB::table('posts')->get();
        $posts = DB::table('posts')->where('user_name',$request->user_name)->get();
        // $user_name = $request->user_name
        return view('user_page', ['posts' => $posts],['name' => $request->user_name]);
    }

    
}
