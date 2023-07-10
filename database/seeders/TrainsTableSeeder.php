<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->codice_treno = $faker->ean8();
            $newTrain->stazione_partenza = $faker->sentence(2);
            $newTrain->stazione_arrivo = $faker->sentence(2);
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->carrozze = $faker->numberBetween(1, 20);
            $newTrain->ritardo = $faker->numberBetween(5, 300);
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
