<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            'location'=>'28/4 Palmal, London',
            'image1'=>'logo-white.png',
            'image2'=>'logo-blue.png',
            'email'=>'admin@gmail.com',
            'phone'=>'333 888 200 - 55',
            'facebook'=>'facebook',
            'twitter'=>'twitter',
            'instegram'=>'instegram',
            'whatsapp'=>'whatsapp',
            'created_at' =>now(),
            'updated_at' =>now(),
          ]);
    }
}
