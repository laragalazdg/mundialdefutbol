<?php

namespace Database\Factories;

use App\Models\Jugador;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class jugadorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jugador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $positions = array('Arquero','Delantero', 'Centro', 'Defensor');
        return [
            'nombre' => $this->faker->country(),
            'posicion' => $this->faker->randomElement($positions),
            'idClub' => $this->faker->numberBetween(1,100),
            'idPais' => $this->faker->numberBetween(1,50),
        ];
    }
}
