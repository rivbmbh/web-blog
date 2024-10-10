<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
     // Secara default laravel akan menghubungkan table jika namanya berjamak contoh table=posts, ketika kita membuat model harus Post (tidak ada 's' diakhir) otomatis akan terhubung ke table tsb. 
    protected $table = 'blog_posts';// Tapi jika berbeda nama tablenya tinggal buat seperti baris ini
    protected $primaryKey = 'post_id';// Begitu juga dengan id jika, laravel akan memberi primary key pada suatu table kecuali ada kolom id jika berbeda buat seperti baris ini

    protected $fillable = ['title', 'author', 'slug', 'body'];
    
     // public static function find($slug): array
         // {
         //     // Function Callback
         //     // Sesuaikan artikel mana yang diklik user dan tampilkan datanya sesuai $slug
         //     // static::all() untuk memanggil method static diclass yang sama
         //     #return Arr::first(static::all(), function($post) use($slug){//use($slug) = global atau mengambil $slug dari luar functionnya
         //         #return $post['slug'] == $slug;// Ambil artikel yang sesuai IDnya
         //     #});
 
         //     // Arrow Function
         //     $post = Arr::first(static::all(),
         //     // $post dalam fn() tersebut adalah hasil iterasi dari statci::all() yang dimana mengembalikan nilai array 
         //     fn($post) => $post['slug'] == $slug);
 
         //     // Cek jika post tiak ditemukan
         //     if(!$post){
         //         abort(404);// Tampilkan halaman 404 atau not found
         //     }
 
         //     return $post;
     // }
}