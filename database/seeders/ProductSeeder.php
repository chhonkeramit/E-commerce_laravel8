<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'POCO MOBILE',
            'price'=>'$700',
            'description'=>'Stylish back cover with 4GB ram and ulta high quality sound and dual camera',
            'category'=>'MOBILE',
            'gallery'=> 'https://rukminim1.flixcart.com/image/416/416/kfvfwy80/mobile/x/p/b/poco-c3-mzb07rhin-original-imafw8zkfygmfgfr.jpeg?q=70'
            ],
            [
                'name' => 'OPPO X2 MOBILE',
                'price' => '$1000',
                'description' => '4 GB RAM | 64 GB ROM | Expandable Upto 512 GB',
                'category' => 'MOBILE',
                'gallery' => 'https://rukminim1.flixcart.com/image/416/416/kfbfr0w0/mobile/q/y/t/poco-x3-mzb07z0in-original-imafvt36bhyvkats.jpeg?q=70'
            ],
            [
                'name' => 'Redmi Note 8 (Neptune Blue, 64 GB)',
                'price' => '$800',
                'description' => 'Stylish back cover with 4GB ram and ulta high quality sound and dual camera',
                'category' => 'MOBILE',
                'gallery' => 'https://rukminim1.flixcart.com/image/416/416/k5lcvbk0pkrrdj/mobile-refurbished/b/9/w/redmi-note-8-64-a-m1908c3ji-mi-4-original-imafhgpphwztnchc.jpeg?q=70'
            ],
            [
                'name' => 'MOTOROLA TV',
                'price' => '$400',
                'description' => '1 Television Set, Remote Control, Wallmount Stand,
                 2 AAA Batteries, Desktop Stand, 2 Stand Support Screws',
                'category' => 'TV',
                'gallery' => 'https://rukminim1.flixcart.com/image/416/416/kfzq8i80/television/m/d/d/motorola-32sahdme-original-imafwc5yzz7cyv3r.jpeg?q=70'
            ],
            [
                'name' => 'Micromax CANVAS 2 PLUS (jet black, 32 GB)',
                'price' => '$400',
                'description' => 'Stylish back cover with 4GB ram and ulta high quality sound and dual camera',
                'category' => 'MOBILE',
                'gallery' => 'https://rukminim1.flixcart.com/image/416/416/kctf0cw0/mobile/v/k/y/micromax-canvas-2-plus-c2a-original-imaftuufg2zwsq84.jpeg?q=70'
            ]
            ]);
    }
}
