<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert admin1
        //email : admin1@admin.com
        //pass  : admin123
        DB::table('users')->insert([
            'name' => 'admin1',
            'email'=>'admin1@admin.com',
            'password'=> bcrypt('admin123'),
            'role' => 'admin',
        ]);

        //insert admin2
        //email : admin2@admin.com
        //pass  : admin123
        DB::table('users')->insert([
            'name' => 'admin2',
            'email'=>'admin2@admin.com',
            'password'=> bcrypt('admin123'),
            'role' => 'admin',
        ]);

        //insert admin3
        //email : admin3@admin.com
        //pass  : admin123
        DB::table('users')->insert([
            'name' => 'admin3',
            'email'=>'admin3@admin.com',
            'password'=> bcrypt('admin123'),
            'role' => 'admin',
        ]);

        //insert user
        //email : user@user.com
        //pass  : user123
        DB::table('users')->insert([
            'name' => 'user',
            'email'=>'user@user.com',
            'password'=> bcrypt('user123'),
            'role' => 'user',
        ]);
    }
}
