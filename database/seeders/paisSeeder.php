<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class paisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pais::factory(50)->create();
    }
}
