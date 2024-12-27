<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'project_name' => 'Website Development',
            'tagline' => 'Build modern websites',
            'category_id' => 1,
            'time_per_hour' => 50.00,
            'location' => 'Remote',
            'logo' => 'logo.png',
        ]);

        Project::create([
            'project_name' => 'Mobile App Design',
            'tagline' => 'Innovative app design',
            'category_id' => 2,
            'time_per_hour' => 75.00,
            'location' => 'Onsite',
            'logo' => 'logo.png',
        ]);
    }
}
