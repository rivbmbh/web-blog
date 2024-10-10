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

// Tampilkan Post berdasarkan kolom slug
Route::get('/post/{post:slug}', function(Post $post){
    // dd($post);
    // $post = Post::find($post);
    return view('post', ['title' => 'Single Post', 'dataPost' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'rivaldo@gmail.com', 'sosial_media' => '@rivaldo13', 'title' => 'Contact | Page']);
});

Route::get('/about', function () {
    return view('about', ['email' => 'rivaldo@gmail.com', 'sosial_media' => '@rivaldo13', 'title' => 'About | Page']);
});

// Route::get('/tes', function () {
//     return view('tes');
// });