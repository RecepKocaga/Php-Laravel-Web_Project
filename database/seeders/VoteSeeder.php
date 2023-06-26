<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('votes')->insert([
            'image'=>'choose-img-1.jpg',
            'title'=>'Seçimlerinize İnanıyoruz',
            'subtitle'=>'Temizliği Benimseyen Uzman Ekibimize Güvenin',
            'title1'=>'Her Müşteri Özeldir',
            'content1'=>'Memnuniyeti ön planda tutarak, büyük bir titizlik ve özveri ile yıkama, ütüleme ve temizleme hizmetlerini sizin için bir araya getiriyoruz.',
            'title2'=>'Hızlı Geri Dönüşler',
            'content2'=>'İşimizi önemsiyoruz ve önceliklerinizi biliyoruz. Talebinizi anında değerlendiriyor vakit kaybetmeden çalışmalara başlıyoruz.',
            'title3'=>'Sizin Yerinize Planlıyoruz',
            'content3'=>'whatGünlük, haftalık, veya aylık olarak ihtiyacınızı, bize bir kez bildirin, sistemimiz alımlarınızı planlamak için işi yapacaktır.sapp',
            'title4'=>'Uygun Fiyatlandırma',
            'content4'=>'Düzenli olarak teslim alma siparişi veren ticari müşteriler, normal fiyatlarımızdan indirimlerle ödüllendirilecektir.',
            'created_at' =>now(),
            'updated_at' =>now(),
          ]);
    }
}
