<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Option::insert([
            ['attribute_id' => '3', 'option'=>'small'],
            ['attribute_id' => '3', 'option'=>'medium'],
            ['attribute_id' => '3', 'option'=>'large'],
        ]);

        Option::insert([
            ['attribute_id' => '6', 'option'=>'small'],
            ['attribute_id' => '6', 'option'=>'medium'],
            ['attribute_id' => '6', 'option'=>'large'],
        ]);
    }
}
