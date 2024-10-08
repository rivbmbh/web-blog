<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-satu',
                'title' => 'Judul Artikel 1',
                'author' => 'Rivaldo Bomboah',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel alias incidunt officiis deleniti maxime laboriosam similique, consequuntur recusandae. Doloremque sit ratione ipsum deleniti consequuntur ducimus est iste voluptatum tempora possimus.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-dua',
                'title' => 'Judul Artikel 2',
                'author' => 'Maximus Offord',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel alias incidunt officiis deleniti maxime laboriosam similique, consequuntur recusandae. Doloremque sit ratione ipsum deleniti consequuntur ducimus est iste voluptatum tempora possimus.'
            ]  
        ];
    }

    public static function find($slug): array
    {
        // Function Callback
        // Sesuaikan artikel mana yang diklik user dan tampilkan datanya sesuai $slug
        // static::all() untuk memanggil method static diclass yang sama
        #return Arr::first(static::all(), function($post) use($slug){//use($slug) = global atau mengambil $slug dari luar functionnya
            #return $post['slug'] == $slug;// Ambil artikel yang sesuai IDnya
        #});

        // Arrow Function
        $post = Arr::first(static::all(),
        // $post dalam fn() tersebut adalah hasil iterasi dari statci::all() yang dimana mengembalikan nilai array 
        fn($post) => $post['slug'] == $slug);

        // Cek jika post tiak ditemukan
        if(!$post){
            abort(404);// Tampilkan halaman 404 atau not found
        }

        return $post;
    }
}