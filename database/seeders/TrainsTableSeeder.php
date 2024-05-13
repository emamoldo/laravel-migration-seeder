<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->agency = $faker->randomElement(['Italo', 'Trenitalia']);
            // TODO: ask if u can do a cicle for the citys
            $train->departure_station = $faker->randomElement(['Ravenna', 'Bologna', 'Imola', 'Forlì', 'Roma', 'Genova', 'Milano']);
            $train->arrival_station = $faker->randomElement(['Ravenna', 'Bologna', 'Imola', 'Forlì', 'Roma', 'Genova', 'Milano']);
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = '#' . $faker->numberBetween(1000, 9000);
            $train->number_of_carriages = $faker->randomDigit();
            $train->on_time = $faker->boolean();
            $train->save();
        }

    }
}
