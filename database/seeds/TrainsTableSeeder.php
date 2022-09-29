<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \faker\Factory::create('it_IT');

        for ($i=0; $i<10; $i++){
            $newTrain = new Train();

            $newTrain->company = $faker->randomNumber(4, true);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time('H:i');
            $newTrain->arrival_time = $faker->time('H:i');
            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->train_wagon = $faker->randomNumber(4, true);
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->deleted = $faker->numberBetween(0, 1);
            $newTrain->company = $faker->word();
            $newTrain->save();
        }
    }
}
