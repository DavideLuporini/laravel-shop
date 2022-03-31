<?php

use Illuminate\Database\Seeder;
use App\Models\Color;


class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_colors = [
            [
                'name' => 'GrigioUno',
                'color' => '#fffeee',
            ],
            [
                'name' => 'GrigioDue',
                'color' => '#faeaaa',
            ]
        ];
        foreach ($new_colors as $new_color) {
            $color = new Color();
            $color->name = $new_color['name'];
            $color->color = $new_color['color'];
            $color->save();
        }
    }
}
