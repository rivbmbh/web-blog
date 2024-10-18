<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home | Page']);
});

Route::get('/posts', function () {
    #$posts = Post::with(['author','category'])->latest()->get();// Eager Loading
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

// Tampilkan Post berdasarkan kolom slug
Route::get('/post/{post:slug}', function(Post $post){
    // $post = Post::find($post);
    return view('post', ['title' => 'Single Post', 'dataPost' => $post]);
});

Route::get('/authors/{user:username}', function(User $user){
    #$postsAuthor = $user->posts->load(['category','author']); // Lazy Eager Loading
    $postsAuthor = $user->posts;
    return view('posts', ['title' => count($postsAuthor) . ' Article by : ' . $user->name, 'posts' => $postsAuthor]);
});

Route::get('/categories/{category:category_slug}', function(Category $category){
    #$postsCategory = $category->posts->load(['category','author']); // Lazy Eager Loading
    $postsCategory = $category->posts; 
    return view('posts', ['title' => count($postsCategory) . ' Articles in Category : ' . $category->category_name, 'posts' => $postsCategory]);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'rivaldo@gmail.com', 'sosial_media' => '@rivaldo13', 'title' => 'Contact | Page']);
});

Route::get('/about', function () {
    return view('about', ['email' => 'rivaldo@gmail.com', 'sosial_media' => '@rivaldo13', 'title' => 'About | Page']);
});