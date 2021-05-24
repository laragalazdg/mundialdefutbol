<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
     /* Seed the application's database.
     *
     * @return void*/
    
    public function run()
    {
        $this->call(paisSeeder::class);
        $this->call(clubSeeder::class);
        $this->call(jugadorSeeder::class);
    }
}
