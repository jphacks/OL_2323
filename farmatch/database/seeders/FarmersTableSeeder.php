<?php

use Illuminate\Database\Seeder;
use App\Models\Farmer;

class FarmersTableSeeder extends Seeder
{
    public function run()
    {
        Farmer::factory(1)->create();  // 1件のテストデータを生成
    }
}
