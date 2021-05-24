<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class jugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Jugador::factory(100)->create();
    }
}
