<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            /*
                WPU Version
            */
            'category_name' => fake()->sentence(rand(1,2), false),
            'category_slug' => Str::slug(fake()->sentence(rand(1,2)), false),
            
            // 'category_name' => fake()->randomElement(['Technology', 'Health', 'Business', 'Education', 'Web Programming', 'Mobile Programming', 'Sport', 'E-Sport']),
            
            #'category_name' => fake()->words(3, true),
            
            // Str slug bawaan laravel menggunakan '-' bukan spasi
            #'category_slug' => Str::slug(fake()->sentence()),// output = judul-slug-satu
        ];
    }
}