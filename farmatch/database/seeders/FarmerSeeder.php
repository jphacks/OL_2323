<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Farmer;

class FarmerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Farmer::create([
            'user_id' => 1,
            'introduction' => '当ファームでは新鮮な野菜を栽培しています。',
            'image' => 'path/to/default/image.jpg', // Specify the default path or URL here.
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Farmer::create([
            'user_id' => 3,
            'introduction' => '自然豊かな環境で育てた有機野菜を提供しています。',
            'image' => 'path/to/default/image.jpg', // Specify the default path or URL here.
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Farmer::create([
            'user_id' => 5,
            'introduction' => '地元の伝統的な農業方法を尊重し、新鮮な果物を栽培しています。',
            'image' => 'path/to/default/image.jpg', // Specify the default path or URL here.
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
