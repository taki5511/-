<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'date' => '2024-9-30',
            'subject' => 'TOEIC',
            'study_time' => '1',
            'body' => '英単語の勉強をした。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
          ]);   
          
           DB::table('posts')->insert([
            'user_id' => 2,
            'category_id' => 1,
            'date' => '2024-10-02',
            'subject' => '英語',
            'study_time' => '2',
            'body' => '文法の勉強をした。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
          ]);   
          
           DB::table('posts')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'date' => '2024-10-15',
            'subject' => 'TOEIC',
            'study_time' => '1',
            'body' => '英単語の勉強をした。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
          ]);   
          
           DB::table('posts')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'date' => '2024-10-20',
            'subject' => 'TOEIC',
            'study_time' => '1',
            'body' => '英単語の勉強をした。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
          ]);   
          
           DB::table('posts')->insert([
            'user_id' => 2,
            'category_id' => 1,
            'date' => '2024-10-30',
            'subject' => 'TOEIC',
            'study_time' => '1',
            'body' => '英単語の勉強をした。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
          ]);   
    }
}
