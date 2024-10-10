<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category_name', 'category_slug',];

    public function posts(): HasMany
    {
        // Tambahkan paramater kedua jika anda memodifikasi nama kolom pada table POST
        // secara default laravel akan mencari 'user_id' karna menyesuaikan dengan tablenya jika anda membuat penamaan kolom yang berbeda maka tambahkan parameter kedua seperti dibawah ini
        return $this->hasMany(Post::class, 'category_id');// beri tau laravel diberalasi dengan kolom author_id bukan user_id pada table post
    }
}