<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sliders')->insert([
            'image' => 'slider1.jpg',
            'title' => 'slider-direction-1',
            'author' => 'Terry Pratchett',
            'quote'=> 'Coffee is a way of stealing time which should by rights belong to your older self.',


        ]);

        DB::table('sliders')->insert([
            'image' => 'slider2.jpg',
            'title' => 'slider-direction-2',
            'author' => 'Old Bourbon Proverb',
            'quote'=> 'To an old man a cup of coffee is like the door post of an old house — it sustains and strengthens him.',


        ]);

        DB::table('sliders')->insert([
            'image' => 'slider3.jpg',
            'title' => 'slider-direction-3',
            'author' => 'Jonathan Laksamana',
            'quote'=> 'People say money can’t buy happiness. They Lie. Money buys Coffee, Coffee makes Me Happy!',


        ]);
    }
}
