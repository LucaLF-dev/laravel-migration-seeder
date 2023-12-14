<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 80; $i++) {
            $newTrain = new Train();

            $newTrain->azienda = $faker->randomElement(['Trenitalia', 'Italo', 'FrecciaRossa', 'Trenord']);
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $partenza = $faker->dateTimeBetween('now - 2 day', 'now + 2 days');
            $newTrain->orario_di_partenza = $partenza;
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween($partenza, 'now + 5 days');
            $newTrain->codice_treno = $faker->unique()->bothify('#####?');
            $newTrain->numero_Carrozze = $faker->numberBetween(1,30);
            $newTrain->posto_numero = $faker->numberBetween(1,55);


            $cancellato = $faker->randomElement([true,false]);
            if ($cancellato) {
                $in_orario = false;
            } else {
                $in_orario = $faker->randomElement([true,false]);
            }
            
            $newTrain->in_orario = $in_orario;
            $newTrain->cancellato = $cancellato;

            $newTrain->save();

        }
    }
}
