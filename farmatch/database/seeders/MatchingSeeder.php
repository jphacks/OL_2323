<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matching;

class MatchingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Matching::create([
            'farmer_id' => 1,
            'seeker_id' => 1,
            'matching_status' => 0,
        ]);

        Matching::create([
            'farmer_id' => 3,
            'seeker_id' => 2,
            'matching_status' => 1,
        ]);
    }
}
