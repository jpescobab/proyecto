<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
			'cni' => $this->faker->name,
			'name' => $this->faker->name,
			'lastname' => $this->faker->name,
			'gender' => $this->faker->name,
			'category' => $this->faker->name,
			'range' => $this->faker->name,
			'birthday' => $this->faker->name,
			'phone' => $this->faker->name,
			'tutor' => $this->faker->name,
			'email' => $this->faker->name,
			'image' => $this->faker->name,
        ];
    }
}
