<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatisfactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('satisfactions')->insert([
            'image'=>'testimonial-img-1.jpg',
            'title'=>'Memnuniyet Garantili Kuru Temizleme ve Çamaşır Yıkama',
            'subtitle'=>'Memnuniyet Garantili Kuru Temizleme ve Çamaşır Yıkama',
            'content'=>'En sevdiğiniz gömleğinizi lekeleme konusunda asla endişelenmeyin. Yaşam tarzınıza uygun bir programda çamaşır yıkama, kuru temizleme ve ütüleme hizmetleri sunuyoruz.', 
            'created_at' =>now(),
            'updated_at' =>now(),
          ]);
    }
}
