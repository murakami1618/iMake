<?php

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
            'name' => '名無し',
            'email' => 'mail@mial.com',
            'password' => '11110000',
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'gmail@gmail.com',
            'password' => '11110000',
        ]);
    }
}
