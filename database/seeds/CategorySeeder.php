<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //make parent 1
        DB::table('categories')->insert([
            'name' => 'Brazillian',
            'parent_id' => null,
            'desc'=> '',

        ]);
        //make parent 2
        DB::table('categories')->insert([
            'name' => 'indonesian',
            'parent_id' => null,
            'desc'=> '',

        ]);

        //make child 1 (brazillian)
        DB::table('categories')->insert([
            'name' => 'Brazilian Espresso',
            'parent_id' => 1,

            'desc'=> '',
            'image' => '1.jpg',

        ]);

        //make child 2 (brazzilan)
        DB::table('categories')->insert([
            'name' => 'Brazilian Latte',
            'parent_id' => 1,

            'desc'=> '',
            'image' => '2.jpg',

        ]);

        //make child 3 (indonesian)
        DB::table('categories')->insert([
            'name' => 'CoffeLuak',
            'parent_id' => 2,
            'desc'=> '',
            'image' => '3.jpg',

        ]);
    }
}
