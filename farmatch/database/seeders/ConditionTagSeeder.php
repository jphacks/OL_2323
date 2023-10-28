<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ConditionTag;

class ConditionTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        ConditionTag::create([
            'name' => '年収約400万円以上',
            'is_farmer' => true,
        ]);

        ConditionTag::create([
            'name' => '休日なしで働ける',
            'is_farmer' => true,
        ]);

        ConditionTag::create([
            'name' => '農業大学卒',
            'is_farmer' => false,
        ]);

        ConditionTag::create([
            'name' => '農地所有',
            'is_farmer' => false,
        ]);
    }
}
