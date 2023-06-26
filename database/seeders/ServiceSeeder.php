<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services=[
            'Kuru Temizleme',
            'Camaşır Yıkama',
            'Ütüleme',
            'Sektörel Kuru Temizleme',
            'Özel ve Lüks Kuru Temizleme',
            'Tekstil Kuru Temizleme'
          ];
        foreach ($services as $service)
        {
            DB::table('services')->insert([
                'image'=>'about-img-1.jpg',
                'title'=>$service,
                'slug'=>str_slug($service),
                'subtitle'=>$service,
                'content'=>'Biz kuru temizleme ve çamaşır yıkama işinde profesyoneliz, 
                            yani her zaman en son teknolojiler, temizleme yöntemleri ve lekeler veya hassas kumaşlarla ilgili çözümler konusunda güncel kalıyoruz. 
                            Ayrıca, yerel ve ulusal düzenlemelere ve çevre güvenliği kurallarına uyarak en yüksek ticari dürüstlük standartlarını koruyoruz!',
                'title1'=>'Kuru Temizleme',
                'content1'=>'Nevşehir kuru temizleme sektöründe en uygun fiyat ile kaliteli hizmet sunmak için buradayız. Temizlik mükemmelliği garantisi sunuyoruz.',
                'created_at' =>now(),
                'updated_at' =>now(),
            ]);
        }
    }
}
