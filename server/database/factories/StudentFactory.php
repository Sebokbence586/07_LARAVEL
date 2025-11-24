<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Schoolclass;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'diak_nev' => $this->faker->name,
            'schoolclass_id' => Schoolclass::factory(),
            'neme' => $this->faker->numberBetween(0,1),
            'iranyitoszam' => $this->faker->postcode,
            'lak_helyseg' => $this->faker->city,
            'lak_cim' => $this->faker->streetAddress,
            'szulesi_hely' => $this->faker->city,
            'szulesi_datum' => $this->faker->date(),
            'igazolvany_szam' => strtoupper($this->faker->bothify('??######')),
            'atlag' => $this->faker->randomFloat(2, 2, 5),
            'osztondij' => $this->faker->randomFloat(2, 0, 200000),
        ];
    }
}
