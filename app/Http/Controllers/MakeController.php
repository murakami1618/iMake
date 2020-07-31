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
        //ファイルの変数定義
        $request->main_image->storeAs('public/main_images', $main_image . '.jpeg');
        if($request->base != null){
            $base = DB::table('posts')->max('id') + 1;
        $request->base->storeAs('public/base', $base . '.jpeg');
        }else{
            $base = "00";
        };
        if($request->etc != null){
            $etc = DB::table('posts')->max('id') + 1;
        $request->etc->storeAs('public/etc', $etc . '.jpeg');
        }else{
            $etc = "00";
        };
        if($request->eyeliner != null){
            $eyeliner = DB::table('posts')->max('id') + 1;
        $request->eyeliner->storeAs('public/eyeliner', $eyeliner . '.jpeg');
        }else{
            $eyeliner = "00";
        };
        if($request->fande != null){
            $fande = DB::table('posts')->max('id') + 1;
        $request->fande->storeAs('public/fande', $fande . '.jpeg');
        }else{
            $fande = "00";
        };
        if($request->shadow != null){
            $shadow = DB::table('posts')->max('id') + 1;
        $request->shadow->storeAs('public/shadow', $shadow . '.jpeg');
        }else{
            $shadow = "00";
        };
        if($request->eyeshadow != null){
            $eyeshadow = DB::table('posts')->max('id') + 1;
        $request->eyeshadow->storeAs('public/eyeshadow', $eyeshadow . '.jpeg');
        }else{
            $eyeshadow = "00";
        };
        DB::table('posts')->insert(
            ['text' => $request -> text, 
            'user_name' => \Auth::user()->name,
            'main_image' => $main_image,
            'base' => $base,
            'eyeliner' => $eyeliner,
            'etc' => $etc,
            'fande' => $fande,
            'shadow' => $shadow,
            'eyeshadow' => $eyeshadow,
            ]
        );
        return redirect('/home');

     }

}
