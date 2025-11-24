<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sport;

class SportFactory extends Factory
{
    protected $model = Sport::class;

    public function definition()
    {
        return [
            'sport_nev' => $this->faker->randomElement(['Foci','Kosárlabda','Úszás','Tenisz','Vízilabda'])
        ];
    }
}
