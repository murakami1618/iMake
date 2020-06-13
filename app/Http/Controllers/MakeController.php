<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\MainImageRequest;

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

    
     public function store(MainImageRequest $request)
     //public function store(Request $request)
     {
        $main_image = DB::table('posts')->max('id') + 1;
        //dd($main_image);
        $request->main_image->storeAs('public/main_images', $main_image . '.jpeg');
        DB::table('posts')->insert(
            ['text' => $request -> text, 
            'user_name' => \Auth::user()->name,
            'main_image' => $main_image]
        );
        return redirect('/home');

     }

}
