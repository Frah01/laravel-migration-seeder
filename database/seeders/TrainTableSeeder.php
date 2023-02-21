<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->words(1);
            $newTrain->stazione_di_partenza = $faker->words(1);
            $newTrain->stazione_di_arrivo = $faker->words(1);
            $newTrain->orario_di_partenza = $faker->dateTime();
            $newTrain->orario_di_partenza = $faker->dateTime();
            $newTrain->orario_di_arrivo = $faker->dateTime();
            $newTrain->numero_carrozze = $faker->randomNumber(1, 25);
            $newTrain->in_orario = $faker->randomElement([true, false]);
            $newTrain->cancellato = $faker->randomElement([true, false]);
            $newTrain->save();
        }
    }
}
