<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models 
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Riempi la tabella
        for ($i = 0; $i < 50; $i++) {
            // Istanzio il model
            $train = new Train();
            // Ne riempio le colonne
            $train->company = fake()->words(rand(1, 5), true);
            $train->station_departures = fake()->name();
            // Lo salvo in persistenza
            $train->save();
        }
    }
}
