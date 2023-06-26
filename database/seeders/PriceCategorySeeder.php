<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PriceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $priceCategories=[
            'Kuru Temizleme',
            'Camaşır Yıkama',
            'Ütüleme'
          ];
        foreach ($priceCategories as $priceCategory)
        {
            DB::table('priceCategories')->insert([
                'name'=>$priceCategory,
                'slug'=>str_slug($priceCategory),
                'created_at' =>now(),
                'updated_at' =>now(),
            ]);
        }
    }
}
