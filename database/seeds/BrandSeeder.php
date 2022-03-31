<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_brands = [
            [
                'name' => 'QuackQuack',
                'color' => '#fffeee',
            ],
            [
                'name' => 'Quick',
                'color' => '#faaaaa',
            ]
        ];
        foreach ($new_brands as $new_brand) {
            $brand = new Brand();
            $brand->name = $new_brand['name'];
            $brand->color = $new_brand['color'];
            $brand->save();
        }
    }
}
