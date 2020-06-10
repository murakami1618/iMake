<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}','PostController@index');

Route::get('/make','MakeController@index');

Route::post('/make','MakeController@store');

Route::get('/user/{user_name}', 'HomeController@user_page');


// Route::get('/make', function () {
//     return view('make');
// });





