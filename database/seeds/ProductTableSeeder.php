<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'Brazillian',
            'parent_id' => null,
            'desc'=> '',

        ]);
        //make parent 2
        DB::table('products')->insert([
            'name' => 'indonesian',
            'parent_id' => null,
            'desc'=> '',

        ]);

        //make child 1 (brazillian)
        DB::table('products')->insert([
            'name' => 'Brazilian Espresso',
            'parent_id' => 1,
            'desc'=> '',
            'image' => '1.jpg',
            'price' =>20000,

        ]);

        //make child 2 (brazzilan)
        DB::table('products')->insert([
            'name' => 'Brazilian Latte',
            'parent_id' => 1,

            'desc'=> '',
            'image' => '2.jpg',
            'price' =>10000,

        ]);

        //make child 3 (indonesian)
        DB::table('products')->insert([
            'name' => 'CoffeLuak',
            'parent_id' => 2,
            'desc'=> '',
            'image' => '3.jpg',
            'price' =>15000,

        ]);
    }
}
