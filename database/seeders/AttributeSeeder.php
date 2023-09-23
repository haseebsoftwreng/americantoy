<?php

namespace Database\Seeders;
use App\Models\Attribute;

use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::insert([
            ['category_id' => '1', 'handler' => ' brand', 'name'=>'Brand','type' => 'input'],
            ['category_id' => '1', 'handler' => ' color', 'name'=>'Color','type' => 'input'],
            ['category_id' => '1', 'handler' => ' size', 'name'=>'Size','type' => 'select'],
        ]);
        Attribute::insert([
            ['category_id' => '2', 'handler' => ' brand', 'name'=>'Brand','type' => 'input'],
            ['category_id' => '2', 'handler' => ' color', 'name'=>'Color','type' => 'input'],
            ['category_id' => '2', 'handler' => ' size', 'name'=>'Size','type' => 'select'],
        ]);
    }
}
