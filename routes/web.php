<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/About', function () {
    return view('about', [
        "title" => "About",
        "name" => "Syaiful Imanudin",
        "email" => "yusriltc@gmail.com",
        "image" => "CV.jpg"
    ]);
});


Route::get('/blog', function () {
    return view('posts', [
        "title" => "posts",
        "posts" => post::all()
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
   
    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});


