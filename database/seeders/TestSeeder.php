<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tests')->insert([
            'user_id' => 1,
            'subject' => '数学',
            'title' => '足し算問題',
            'body' => '1＋1=?',
            'answer' =>'2',
            'image_url' =>'',
            'date' =>'2024-10-23',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
    }
}
