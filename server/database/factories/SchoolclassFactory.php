<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Schoolclass;

class SchoolclassFactory extends Factory
{
    protected $model = Schoolclass::class;

    public function definition()
    {
        return [
            'osztaly_nev' => $this->faker->bothify('??###')
        ];
    }
}
