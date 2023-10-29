<?php

namespace Database\Factories;

use App\Models\Farmer;
use Illuminate\Database\Eloquent\Factories\Factory;

class FarmerFactory extends Factory
{
    protected $model = Farmer::class;

    public function definition()
    {
        return [
            'user_id' => 1, 
            'image' => $this->faker->imageUrl(), 
            'introduction' => $this->faker->sentence(),
        ];
    }
}
