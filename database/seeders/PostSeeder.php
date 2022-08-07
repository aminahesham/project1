<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('posts')->insert([

            'title'     => 'first post  ',
            'content'   => 'this post is talking about laravel framework ',
           
        ]);

        DB::table('posts')->insert([

            'title'     => 'second post  ',
            'content'   => 'this post is talking about php basics  ',
           
        ]);

    }
}
