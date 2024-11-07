<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Technology', 'image_path' => 'imges/job_categories/1.png'],
            ['name' => 'Healthcare', 'image_path' => 'imges/job_categories/2.png'],
            ['name' => 'Finance', 'image_path' => 'imges/job_categories/3.png'],
            ['name' => 'Engineering', 'image_path' => 'imges/job_categories/4.png'],
            ['name' => 'Marketing', 'image_path' => 'imges/job_categories/5.png'],
            ['name' => 'Education', 'image_path' => 'imges/job_categories/6.png'],
            ['name' => 'Human Resources', 'image_path' => 'imges/job_categories/7.png'],
            ['name' => 'Design', 'image_path' => 'imges/job_categories/8.png'],
            ['name' => 'Administration', 'image_path' => 'imges/job_categories/9.png'],
            ['name' => 'Manufacturing', 'image_path' => 'imges/job_categories/10.png'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'image_path' => $category['image_path'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
