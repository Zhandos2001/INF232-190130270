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
Route::get('/test', function () {
    return view('welcome');
});


Route::get('/info', function () {
    return view('myinfo');
});
Route::get('/Id', function () {
    return view('myId');
});

Route::get('/HI', function () {
    return view('last');
});

Route::get('/example-redirect', function () { // Бұл жерде redirect view myinfo дағы жауапты қайтарады.
    return redirect("/info");
});


Route::get('/post1/{id}', function ($id) {  
    return "Your is id: ".$id;
});
