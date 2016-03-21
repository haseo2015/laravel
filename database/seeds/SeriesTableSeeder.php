<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Serie;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('it_IT');
        $arraySerie = array(".hack G.U.","Dinasty Warriors", "Tales of..","Resident Evil", "Dr. Who", "Ar Gear","Serie A", "Serie B","Serie C", "Altro");

        foreach($arraySerie as $serie){
            $_serie = Serie::create([
                'serie_name' => $serie,
                'serie_slug' => Str::slug($serie),
                'created_at' => $faker->dateTimeThisYear($max = 'now'),
                'updated_at' => $faker->dateTimeThisYear($max = 'now'),
            ]);
        }
    }
}
