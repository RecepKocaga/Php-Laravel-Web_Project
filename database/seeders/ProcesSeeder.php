<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proces=[
            'Hazırlayın',
            'Teslim Alalım',
            'Temizleyelim',
            'Teslim Edelim'
          ];
        foreach ($proces as $proce)
        {
          DB::table('proces')->insert([
            'title'=>$proce,
            'subtitle'=>$proce,
            'image'=>'slider-img-1.jpg',
            'created_at'=>now(),
            'updated_at'=>now()
          ]);
        }
    }
}
