<?php

use App\Models\Post;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fadil Pratama",
        "email" => "fadil@gmail.com",
        "image" => "fadil.png"
    ]);
});


Route::get('/blog', function () {
    return view('posts', [
        "title" => "Post",
        "posts" => Post::all()
    ]);
});


//halaman single post
Route::get('posts/{slug}', function ($slug) {

    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});
