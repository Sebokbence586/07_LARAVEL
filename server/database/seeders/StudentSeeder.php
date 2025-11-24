<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Schoolclass;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $classes = Schoolclass::all();

        foreach ($classes as $class) {
            Student::factory()->count(10)->create([
                'schoolclass_id' => $class->id
            ]);
        }
    }
}
