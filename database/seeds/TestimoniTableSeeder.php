<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('testimonis')->insert([
            'user_id' => '1',
            'testimoni' => 'Best Place To drink coffe',

        ]);
        DB::table('testimonis')->insert([
            'user_id' => '2',
            'testimoni' => 'Best Place To hear music',

        ]);
    }
}
