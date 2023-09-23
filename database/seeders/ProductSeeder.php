<?php

namespace Database\Seeders;

use APp\Helpers\Random;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<5; $i++)
        Product::create([
            'category_id' => '1',
            'name' =>'product'. $i,
            'description' => 'lorem ipsum dummy text by faker factory',
            'price' => '200',
            'stock' => '15',
            'oldprice' => '400',
            'handler' => 'product'. $i,
        ]); 
        
        for($i=1;$i<5; $i++)
        Product::create([
            'category_id' => '2',
            'name' =>'product'. $i,
            'description' => 'lorem ipsum dummy text by faker factory',
            'price' => '300',
            'stock' => '15',
            'oldprice' => '400',
            'handler' => 'product'. $i,
        ]);
        
        for($i=1;$i<5; $i++)
        Product::create([
            'category_id' => '3',
            'name' =>'product'. $i,
            'description' => 'lorem ipsum dummy text by faker factory',
            'price' => '400',
            'stock' => '15',
            'oldprice' => '400',
            'handler' => 'product'. $i,
        ]);

        for($i=1;$i<13; $i++)
        Image::insert([
            ['product_id' => $i,'path' => 'images/products/default1.jpg'],
            ['product_id' => $i,'path' => 'images/products/default2.jpg'],
            ['product_id' => $i,'path' => 'images/products/default3.jpg']
        ]); 
        for($i=1;$i<13; $i++)
        Color::insert([
            ['product_id' => $i,'color' => 'black'],
            ['product_id' => $i,'color' => 'white'],
            ['product_id' => $i,'color' => 'blue']
        ]);
    }
}
