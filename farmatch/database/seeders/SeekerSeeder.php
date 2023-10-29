<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seeker;

class SeekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seeker::create([
            'user_id' => 2,
            'career' => 'ウェブ開発者',
            'introduction' => '使いやすいウェブサイトを構築するための経験豊富なウェブ開発者です。',
        ]);

        Seeker::create([
            'user_id' => 4,
            'career' => 'グラフィックデザイナー',
            'introduction' => 'デジタルおよび印刷メディア向けの視覚的に魅力的なデザインを得意としています。',
        ]);
    }
}
