<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices=[
            'Elbise',
            'Bataniye',
            'Nervesim',
            'Ayakkabı',
            'Ceket',
            'Perde',
            'Gelinlik',
            'Havlu'
          ];
        foreach ($prices as $price)
        {
        DB::table('prices')->insert([
            'category_id'=>rand(1,3),
            'title'=>$price,
            'subtitle'=>$price,
            'image'=>'project-1.jpg',
            'price'=>100,
            'slug'=>str_slug($price),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        }
    }
}
