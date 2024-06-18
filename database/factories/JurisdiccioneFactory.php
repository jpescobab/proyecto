<?php

namespace Database\Factories;

use App\Models\Jurisdiccione;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JurisdiccioneFactory extends Factory
{
    protected $model = Jurisdiccione::class;

    public function definition()
    {
        return [
			'codigo' => $this->faker->name,
			'nombre' => $this->faker->name,
        ];
    }
}
