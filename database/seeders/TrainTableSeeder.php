<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train as Train;
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
            $newTrain->Azienda = $faker->words(1);
            $newTrain->Stazione_di_Partenza = $faker->words(1);
            $newTrain->Stazione_di_Arrivo = $faker->words(1);
            $newTrain->Orario_di_Partenza = $faker->Time();
            $newTrain->Orario_di_Arrivo = $faker->Time();
            $newTrain->Numero_Carrozze = $faker->randomNumber(1, 25);
            $newTrain->Orario_di_Arrivo = $faker->Time();
            $newTrain->save();
        }
    }
}
