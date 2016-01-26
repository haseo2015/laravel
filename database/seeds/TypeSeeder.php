<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create('it_IT');

        Type::create([
            'name' => 'Anime',
            'slug' => 'anime',
            'is_published' => 1
        ]);

        Type::create([
            'name' => 'manga',
            'slug' => 'manga',
            'is_published' => 1
        ]);

        Type::create([
            'name' => 'Videogames',
            'slug' => 'videogames',
            'is_published' => 1
        ]);

        Type::create([
            'name' => 'Fumetti americani',
            'slug' => 'fumetti-americani',
            'is_published' => 1
        ]);
    }
}
