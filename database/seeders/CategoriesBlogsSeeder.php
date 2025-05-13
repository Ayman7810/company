<?php

namespace Database\Seeders;

use App\Models\CategoryBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesBlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Accounting' ,'Budgets', 'Business' , 'Business Plans' , 'Commodities' , 'Insurance'  ];
        
        foreach($categories as $category){
            
            CategoryBlog::updateOrCreate([
                'title' => $category
            ]);
        }
        
    }
}