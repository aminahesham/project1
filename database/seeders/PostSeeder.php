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

            'user_id'   => '1',
            'title'     => 'first post  ',
            'content'   => 'this post is talking about laravel framework ',
           
        ]);

        DB::table('posts')->insert([
            'user_id'   => '3',
            'title'     => 'second post  ',
            'content'   => 'this post is talking about php basics  ',
           
        ]);

        DB::table('posts')->insert([
            'user_id'   => '2',
            'title'     => 'laravel   ',
            'content'   => 'this post is talking about laravel framework  ',
           
        ]);

        DB::table('posts')->insert([
            'user_id'   => '4',
            'title'     => 'backend ',
            'content'   => 'this post is talking about backend development ',
           
        ]);

        DB::table('posts')->insert([
            'user_id'   => '1',
            'title'     => 'frontend   ',
            'content'   => 'this post is talking about frontend  ',
           
        ]);

    }
}
