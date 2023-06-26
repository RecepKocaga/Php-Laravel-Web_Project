<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HeadSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ProcesSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(VoteSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(SatisfactionSeeder::class);
        $this->call(PriceCategorySeeder::class);
        $this->call(PriceSeeder::class);
    }
}
