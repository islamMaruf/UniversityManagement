<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Mr.Admin',
            'email' => 'admin@diu.edu.bd',
            'password' => bcrypt('123456'),
            'role_id' => '1'
        ]);
        DB::table('users')->insert([
            'name' => 'Md.Maruf Islam',
            'email' => 'maruf@diu.edu.bd',
            'password' => bcrypt('123456'),
            'role_id' => '3'
        ]);
        DB::table('users')->insert([
            'name' => 'Ms.Afsara Tasneem Misa',
            'email' => 'misha@diu.edu.bd',
            'password' => bcrypt('123456'),
            'role_id' => '2'
        ]);

    }
}
