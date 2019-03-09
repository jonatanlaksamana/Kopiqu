<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('services')->insert([
            'font' => 'fa fa-coffee',
            'service' => 'High Quality Coffe',
            'desc' => 'We believe good quality coffee means good quality time.',
        ]);

        //service 2
        DB::table('services')->insert([
            'font' => 'fa fa-book',
            'service' => 'Educational Workspace',
            'desc' => '     one of the most good things in this earth is learning while drinking coffe.
                              and we can provide a good place here!!',
        ]);

        //service 3
        DB::table('services')->insert([
            'font' => 'fa fa-music',
            'service' => 'Live Music',
            'desc' => 'A perfect day is when you got a good coffe with good music. ',
        ]);
    }
}
