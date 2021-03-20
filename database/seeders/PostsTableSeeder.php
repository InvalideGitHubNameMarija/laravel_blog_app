<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
            'title'=>'Seeder Post 1',
            'body'=> 'Seeder body 1',
            'rate'=>10
        ],[
            'title'=>'Seeder Post 2',
            'body'=> 'Seeder body 2',
            'rate'=>8
        ]
        ]);
    }
}
