<?php

use App\Models\Post;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home | Page']);
});

Route::get('/posts', function () {
    // return dd($data);
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

// Tampilkan Post yang diklik 
Route::get('/post/{slug}', function($slug){
    // dd($post);
    return view('post', ['title' => 'Single Post', 'dataPost' => Post::find($slug)]);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'rivaldo@gmail.com', 'sosial_media' => '@rivaldo13', 'title' => 'Contact | Page']);
});

Route::get('/about', function () {
    return view('about', ['email' => 'rivaldo@gmail.com', 'sosial_media' => '@rivaldo13', 'title' => 'About | Page']);
});