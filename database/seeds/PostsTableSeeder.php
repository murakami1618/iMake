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
            'user_id' => '1',
            'text' => 'test用の投稿だよ',
            'main_image' => '001',
        ]);

        DB::table('posts')->insert([
            'user_id' => '2',
            'text' => 'test用の投稿2だよ',
            'main_image' => '002',
        ]);
    }
}
