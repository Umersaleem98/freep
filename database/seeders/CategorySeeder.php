<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Web Development', 'description' => 'Projects related to website creation and maintenance.'],
            ['name' => 'Mobile App Development', 'description' => 'Projects for designing and building mobile apps.'],
            ['name' => 'Graphic Design', 'description' => 'Projects involving creative graphic design work.'],
            ['name' => 'Content Writing', 'description' => 'Projects focused on content creation and writing.'],
            ['name' => 'Digital Marketing', 'description' => 'Projects aimed at online marketing strategies.'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
