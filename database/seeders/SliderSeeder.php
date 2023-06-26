<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders=[
            'Fast and efficient service1',
            'Fast and efficient service2',
            'Fast and efficient service3'
          ];
        foreach ($sliders as $slider)
        {
          DB::table('sliders')->insert([
            'title'=>$slider,
            'image'=>'slider-img-1.jpg',
            'url'=>'https://youtu.be/o4GuSJYSzrY',
            'subtitle'=>$slider,
            'created_at'=>now(),
            'updated_at'=>now()
          ]);
        }
    }
}
