<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        /*
            Todo : cara manual melakukan seeder
        */
        // User::create([
        //     'name' => 'Rivaldo Bomboah',
        //     'username' => 'rivaldo_bomboah',
        //     'email' => 'rivaldo1324@example.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);

        // Category::create([ 
        //     'category_name' => 'Blog Programming',
        //     'category_slug' => 'blog-programming',
        // ]);

        // Post::create([
        //     'title' => 'Cara Hack Nasa Dalam 5 menit',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'cara-hack-nasa-dalam-5-menit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur veritatis consequatur, quaerat consequuntur commodi doloribus omnis perferendis odio repellendus optio! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam aperiam ad corporis quasi? Autem, nostrum dolore explicabo vitae laboriosam impedit dolores, quisquam et optio, commodi perspiciatis in iusto velit laborum.',
        // ]);

        /*
            Todo : menggunakan factory (agar data di dummy secara otomatis)
        */
        
        // $user_dengan_nama_custom = User::create([
        //     'name' => 'Rivaldo Bomboah',
        //     'username' => 'rivaldo_bomboah',
        //     'email' => 'rivaldo1324@example.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);
        
        // Post::factory(50)->recycle([
        //     Category::factory(5)->create(),
        //     $user_dengan_nama_custom, // Menambahkan 1 user custom
        //     User::factory(8)->create(),
        // ])->create();

        /*
            ?? memanggil seeder dari class lain dan menjalankannya
        */
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(50)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}