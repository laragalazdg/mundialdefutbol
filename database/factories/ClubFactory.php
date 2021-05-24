<?php

namespace Database\Factories;

use App\Models\Club;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class clubFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Club::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ciudad' => $this->faker->city(),
            'nombre' => $this->faker->firstName()
        ];
    }
}
