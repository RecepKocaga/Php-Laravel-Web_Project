<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'image'=>'about-img-1.jpg',
            'title'=>'Nevşehir Kuru Temizleme',
            'subtitle'=>'Temizleme hususunda tutkuluyuz.',
            'content'=>'Biz kuru temizleme ve çamaşır yıkama işinde profesyoneliz, 
                        yani her zaman en son teknolojiler, temizleme yöntemleri ve lekeler veya hassas kumaşlarla ilgili çözümler konusunda güncel kalıyoruz. 
                        Ayrıca, yerel ve ulusal düzenlemelere ve çevre güvenliği kurallarına uyarak en yüksek ticari dürüstlük standartlarını koruyoruz!',
            'title1'=>'Kuru Temizleme',
            'content1'=>'Nevşehir kuru temizleme sektöründe en uygun fiyat ile kaliteli hizmet sunmak için buradayız. Temizlik mükemmelliği garantisi sunuyoruz.',
            'title2'=>'Çamaşır Yıkama',
            'content2'=>'Nevşehir çamaşır yıkama ihtiyaçlarınızda taleplerinizi kısa sürede cevaplıyor, en son teknoloji makinelerimiz ile hizmet veriyoruz.',
            'created_at' =>now(),
            'updated_at' =>now(),
          ]);
    }
}
