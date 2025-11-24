<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Sport;

class PlayingSportSeeder extends Seeder
{
    public function run(): void
    {
        $students = Student::all();
        $sports = Sport::all();

        foreach ($students as $student) {
            $student->sports()->attach(
                $sports->random(rand(1,3))->pluck('id')->toArray()
            );
        }
    }
}
