<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([
            'image'=>'choose-img-1.jpg',
            'title'=>'Deneyimimiz',
            'subtitle'=>'Kişisel Dokunuşla Standart Temizliği Bulun',
            'content'=>'Duis nunc sodales conubia help laoreet aliquet nostra eleifend lacinias prasent hendrerit quisque penatibus erat. Pulvinar integer semper ridiculus lectuse condimentum obor tise verodar capmtaso morin proin nibh posuere.',
            'title1'=>'Onarım Kalitesi',
            'number1'=>85,
            'title2'=>'mutlu müşteri',
            'number2'=>75,
            'title3'=>'Destek Merkezi',
            'number3'=>63,
            'created_at' =>now(),
            'updated_at' =>now(),
          ]);
    }
}
