<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            
            'text' => 'test用の投稿だよ',
            'main_image' => '001',
            'user_name' => '名無し',

        ]);

        DB::table('posts')->insert([

            'text' => 'test用の投稿2だよ',
            'main_image' => '002',
            'user_name' => 'test',
        ]);
    }
}
