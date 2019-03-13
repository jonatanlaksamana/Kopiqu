<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert([
            'user_id' => '1',
            'payment_status' => 'not paid',
            'payment_value'=> 19800,
            'addres' => 'dummy addres'

        ]);
    }
}
