<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create();

        Category::create([
            'category_name' => 'Blog Programming',
            'category_slug' => 'blog-programming',
            'color' => 'emerald',
        ]);
        Category::create([
            'category_name' => 'Artifcial Intelegent',
            'category_slug' => 'artifcial-intelegent',
            'color' => 'zinc',
        ]);
        Category::create([
            'category_name' => 'Cyber Security',
            'category_slug' => 'cyber-security',
            'color' => 'primary',
        ]);
        Category::create([
            'category_name' => 'Design Graphic',
            'category_slug' =>'design-graphic',
            'color' => 'amber',
        ]);
        Category::create([
            'category_name' => 'Web Design',
            'category_slug' =>'web-design',
            'color' => 'lime',
        ]);
    }
}