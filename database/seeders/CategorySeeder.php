<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['name' => 'Men','image' => 'images/category/men.jpg','handler'=>'Men' ],
            ['name' => 'Women','image' => 'images/category/women.jpg','handler'=>'Woman'],
            ['name' => 'Accessories','image' => 'images/category/accessories.jpg','handler'=>'Accessories'],
        ]);
    }
}
