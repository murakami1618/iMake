<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MakeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('make');
    }
     public function store(Request $request)
     {
        DB::table('posts')->insert(
            ['text' => $request -> text, 
            'user_name' => \Auth::user()->name,
            'main_image' => 'damee']
        );
        return redirect('/home');

     }

}
