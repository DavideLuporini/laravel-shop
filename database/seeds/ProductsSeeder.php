<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Product;
use App\Models\Brand;
use Faker\Generator as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $brand_ids = Brand::pluck('id')->toArray();

        for ($i = 0; $i < 15; $i++) {
            $new_product = new Product();
            $new_product->brand_id = Arr::random($brand_ids);
            $new_product->name = ucfirst($faker->word());
            $new_product->description = $faker->paragraph();
            $new_product->price = $faker->randomFloat(2, 1, 999);
            $new_product->image = $faker->imageUrl(200, 200);
            $new_product->save();
        }
    }
}
