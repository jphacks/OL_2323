<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create([
            'name' => '山田 太郎',
            'email' => 'yamada@example.com',
            'password' => Hash::make('password'),
            'address' => '東京都千代田区1-1-1',
            'age' => 30,
            'phone_number' => '090-1234-5678',
            'is_farmer' => true,
        ]);

        User::create([
            'name' => '佐藤 花子',
            'email' => 'sato@example.com',
            'password' => Hash::make('password'),
            'address' => '大阪府大阪市2-2-2',
            'age' => 25,
            'phone_number' => '080-1111-2222',
            'is_farmer' => false,
        ]);

        User::create([
            'name' => '田中 次郎',
            'email' => 'tanaka@example.com',
            'password' => Hash::make('password'),
            'address' => '北海道札幌市3-3-3',
            'age' => 35,
            'phone_number' => '070-2222-3333',
            'is_farmer' => true,
        ]);

        User::create([
            'name' => '伊藤 三郎',
            'email' => 'ito@example.com',
            'password' => Hash::make('password'),
            'address' => '福岡県福岡市4-4-4',
            'age' => 28,
            'phone_number' => '080-3333-4444',
            'is_farmer' => false,
        ]);

        User::create([
            'name' => '高橋 美智子',
            'email' => 'takahashi@example.com',
            'password' => Hash::make('password'),
            'address' => '神奈川県横浜市5-5-5',
            'age' => 32,
            'phone_number' => '090-4444-5555',
            'is_farmer' => true,
        ]);
        
    }
}
