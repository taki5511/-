<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'taki',
            'age' => '21',
            'email' => 'kou.takigawa3131@gmail.com',
            'password' => Hash::make('kamatama5511'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '田中',
            'age' => '22',
            'email' => 'k@gmail.com',
            'password' => Hash::make('uver3131'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
