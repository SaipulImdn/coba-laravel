<?php

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


Route::get('/Profile', function () {
    $blog_posts = [
        [
            "title" => "Judul poost pertama",
            "author" => "Syaiful Imanudin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam facere laboriosam similique suscipit soluta non vero quos eligendi sit voluptatum nesciunt quidem sapiente deleniti, ipsum, quisquam minus, repellat iusto odio."
        ],
        "title" => "Judul poost Kedua",
        "author" => "Agus Ferdiansyah",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto ex quod eligendi animi velit aut rem, expedita beatae voluptas quas, consectetur culpa unde eveniet cum odit explicabo numquam neque ad, veniam vel error at? Pariatur reprehenderit autem non dicta sit modi eius. Quidem voluptas aspernatur iure consequuntur qui vero neque modi veritatis quisquam autem tempore excepturi perferendis velit accusamus, enim blanditiis aliquid magnam non corporis possimus delectus perspiciatis porro nobis? Quaerat libero inventore praesentium odio provident vero, voluptas et voluptate voluptatibus dolor quisquam ut alias illo vel cum. Numquam exercitationem pariatur accusantium quod esse voluptas inventore minima ipsam quasi."
    
    ];
    return view('profile', [
        "title" => "profile",
        "posts" => $blog_posts
    ]);
});


