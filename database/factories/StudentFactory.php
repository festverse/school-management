<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'studentImage' => $this->faker->imageUrl(400, 400),
            'fName' => $this->faker->firstName(),
            'mName' => $this->faker->firstNameMale(),
            'lName' => $this->faker->lastName(),
            'studentId' => $this->faker->unique()->numberBetween(1000000, 9999999),
            'email' => $this->faker->unique()->email(),
            'pNumber' => $this->faker->unique()->phoneNumber(),
            'course' => $this->faker->randomElement(['BSIT-IA', 'BSIT-IIA', 'BSIT-IIIA', 'BSIT-IVA', 'BSCS-IA', 'BSCS-IIA', 'BSCS-IIIA', 'BSCS-IVA', 'BSCE-IA', 'BSCE-IIA', 'BSCE-IIIA', 'BSCE-IVA']),
            'age' => $this->faker->numberBetween(18, 40),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'brgy' => $this->faker->streetName(),
            'city' => $this->faker->city(),
            'province' => $this->faker->state(),
            'enrolled' => $this->faker->randomElement(['Enrolled', 'Not Enrolled', 'Pending']),
        ];
    }
}
