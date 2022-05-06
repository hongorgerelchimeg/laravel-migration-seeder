<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 500; $i++) {
            $trainData = [
                'stazione_partenza'             => $faker->city(),
                'orario_partenza'       => $faker->dateTimeBetween('-2 week', '-1 week'),
                'orario_arrivo'              => $faker->dateTimeBetween('1 week', '2 week'),
                'codice_treno'    => $faker->numberBetween(1000000, 9999999),
                'numero_carrozze'    => $faker->numberBetween(0, 16),
            ];

            $house = new Train();
            $house->fill($trainData);
            $house->save();
        }
    }
}
