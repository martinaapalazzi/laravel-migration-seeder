<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 

// Models 
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void // run (Faker $faker)
    {
        
        // Riempi la tabella
        for ($i = 0; $i < 10; $i++) {
            // Istanzio il model
            $train = new Train();

            // Ne riempio le colonne
            //$train->company = $faker->name();
            ///$train->station_departures = $faker->sentence(3);
            //$train->station_arrivals = $faker->sentence(3);
            //$train->time_departures = $faker->time();
            //$train->time_arrivals = $faker->time();
            //$train->train_num = $faker->sentence(3);
            //$train->num_train_carriagies = $faker->randomNumber(2, false);
            // $train->on_time = ;
            // $train->cancelled = ;

            $train->company = fake()->words(rand(1, 5), true);
            $train->station_departures = fake()->name();
            $train->station_arrivals = fake()->name();
            $train->time_departures = fake()->dateTime();
            $train->time_arrivals = fake()->dateTime();
            $train->train_num = fake()->name();
            $train->num_train_carriagies = fake()->numerify();
            $train->on_time = fake()->boolean();
            $train->cancelled = fake()->boolean();


            // Lo salvo in persistenza
            $train->save();
        }
    }
}
