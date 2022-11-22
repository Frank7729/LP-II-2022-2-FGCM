<?php

namespace Database\Seeders;

use App\Models\image;
use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products=product::factory(20)->create();
        foreach($products as $product) {
            image::factory(1)->create([
                'imageable_id'=>$product->id,
                'imageable_type'=>product::class
            ]);
        }
    }
}
