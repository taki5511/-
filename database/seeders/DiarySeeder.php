<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diaries')->insert([
            'user_id' => 1,
            'date' => '2024-10-02',
            'title' => '今日の勉強内容',
            'body' => '今日はTOEICの問題集を解いた。',
            'image_url' =>'',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
             ]);
    }
}
