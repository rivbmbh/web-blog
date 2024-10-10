<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home | Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

// Tampilkan Post berdasarkan kolom slug
Route::get('/post/{post:slug}', function(Post $post){
    // $post = Post::find($post);
    return view('post', ['title' => 'Single Post', 'dataPost' => $post]);
});

Route::get('/authors/{user}', function(User $user){
    return view('posts', ['title' => 'Article by : ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category}', function(Category $category){
    return view('posts', ['title' => 'Category : ' . $category->category_name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'rivaldo@gmail.com', 'sosial_media' => '@rivaldo13', 'title' => 'Contact | Page']);
});

Route::get('/about', function () {
    return view('about', ['email' => 'rivaldo@gmail.com', 'sosial_media' => '@rivaldo13', 'title' => 'About | Page']);
});