<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Categories=[
            'Kuru Temizleme',
            'Camaşır Yıkama',
            'Ütüleme',
            'Sektörel Kuru Temizleme',
            'Özel ve Lüks Kuru Temizleme',
            'Tekstil Kuru Temizleme'
          ];
        foreach ($Categories as $Category)
        {
            DB::table('categories')->insert([
                'name'=>$Category,
                'slug'=>str_slug($Category),
                'created_at' =>now(),
                'updated_at' =>now(),
            ]);
        }
    }
}
