<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name'=> "TOEIC"
        ]);
        
         DB::table('categories')->insert([
            'name'=> "現代文"
        ]);
        
         DB::table('categories')->insert([
            'name'=> "古文・漢文"
        ]);
        
         DB::table('categories')->insert([
            'name'=> "数学"
        ]);
        
         DB::table('categories')->insert([
            'name'=> "英語"
        ]);
        
         DB::table('categories')->insert([
            'name'=> "生物"
        ]);
        
         DB::table('categories')->insert([
            'name'=> "物理"
        ]);
        
         DB::table('categories')->insert([
            'name'=> "化学"
        ]);
        
        DB::table('categories')->insert([
            'name'=> "日本史"
        ]);
        
        DB::table('categories')->insert([
            'name'=> "世界史"
        ]);
        
        DB::table('categories')->insert([
            'name'=> "地理"
        ]);
        
        DB::table('categories')->insert([
            'name'=> "簿記"
        ]);
        
    }
}
