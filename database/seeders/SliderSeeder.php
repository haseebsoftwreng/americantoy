<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::insert([
            ['title' => 'New Watch','text' =>'Some Text 1','image' => 'images/slider/default.jpg'],
            ['title' => 'New Watch','text' =>'Some Text 2','image' => 'images/slider/default.jpg'],
           
        ]);
    }
}
