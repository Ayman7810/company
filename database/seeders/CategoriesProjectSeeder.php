<?php

namespace Database\Seeders;

use App\Models\CategoryProject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Business Consulting' ,'Marketing', 'Strategy' , 'Online Marketing' , 'SEO Optimization' , 'Corporate Finance'];

        foreach($categories as $category){
            
            CategoryProject::updateOrCreate([
                'title' => $category
            ]);
        }
    }
}