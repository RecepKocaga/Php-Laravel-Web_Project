<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs=[
            'Elbise',
            'Bataniye',
            'Nervesim',
            'Ayakkabı',
            'Ceket',
            'Perde',
            'Gelinlik',
            'Havlu'
          ];
        foreach ($blogs as $blog)
        {
        DB::table('blogs')->insert([
            'categor_id'=>rand(1,6),
            'title'=>$blog,
            'content'=>'Nancy boy Charles down the pub get stuffed mate easy peasy brown bread car 
            boot squiffy loo, blimey arse over tit it’s your round cup of char horse play chimney 
            pot old. Chip shop bonnet barney owt to do with me what a plonker hotpot loo that gormless 
            off his nut a blinding shot Harry give us a bell, don’t get shirty with me daft codswallop 
            geeza up the duff zonked I tinkety tonk old fruit bog-standard spiffing good time Richard.
             Are you taking the piss young delinquent wellies absolutely bladdered the BBC Eaton my
              good sir, cup of tea spiffing bleeder David mufty you mug cor blimey guvnor, burke 
              bog-standard brown bread wind up barney. Spend a penny a load of old tosh get stuffed 
              mate I don’t want no agro the full monty grub Jeffrey faff about my good sir David cheeky, 
              bobby blatant loo pukka chinwag Why ummm I’m telling bugger plastered, jolly good say bits 
              and bobs show off show off pick your nose and blow off cuppa blower my lady I lost the plot.',
            'title1'=>$blog,
            'content1'=>'Nancy boy Charles down the pub get stuffed mate easy peasy brown bread car boot squiffy loo, blimey arse over tit 
            it’s your round cup of char horse play chimney pot old. Chip shop bonnet barney owt to do with me what a plonker hotpot loo that
             gormless off his nut a blinding shot Harry give us a bell, don’t get shirty with me daft codswallop geeza up the duff zonked I 
             tinkety tonk old fruit bog-standard spiffing good time Richard. Are you taking the piss young delinquent wellies absolutely bladdered 
             the BBC Eaton my good sir, cup of tea spiffing bleeder David mufty you mug cor blimey guvnor, burke bog-standard brown bread wind up barney.
              Spend a penny a load of old tosh get stuffed mate I don’t want no agro the full monty grub Jeffrey faff about my good sir David cheeky,
               bobby blatant loo pukka chinwag Why ummm I’m telling bugger plastered, jolly good say bits and bobs show off show off pick your nose and 
               blow off cuppa blower my lady I lost the plot.',
            'image'=>'b1.jpg"',
            'slug'=>str_slug($blog),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        }
    }
}
