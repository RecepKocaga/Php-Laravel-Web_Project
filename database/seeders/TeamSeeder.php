<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams=[
            'Admin Admin',
            'Samual Nandez',
            'Connie Fountain',
            'Georgia Mishel',
            'User User'
          ];
        foreach ($teams as $team)
        {
        DB::table('teams')->insert([
            'image'=>'service-6.jpg',
            'full_name'=>$team,
            'job'=>'CEO',
            'province'=>'Nevşehir',
            'instegram'=>'#',
            'twitter'=>'#',
            'facebook'=>'#',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        }
}

}