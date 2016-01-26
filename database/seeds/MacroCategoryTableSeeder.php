<?php

use Illuminate\Database\Seeder;
use App\MacroCategory;

class MacroCategoryTableSeeder extends Seeder
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

        MacroCategory::create([
            'name' => 'Armi',
            'slug' => 'armi',
            'category_color' => '#cc33bb',
            'fonticon' => '556',
            'order' => '1',
            'is_published' => 1,
            'published_at' => $faker->dateTimeThisYear($max = 'now')
        ]);
        MacroCategory::create([
            'name' => 'Accessori',
            'slug' => 'accessori',
            'category_color' => '#abcdef',
            'fonticon' => '400',
            'order' => '2',
            'is_published' => 1,
            'published_at' => $faker->dateTimeThisYear($max = 'now')
        ]);
        MacroCategory::create([
            'name' => 'Costumi',
            'slug' => 'costumi',
            'category_color' => '#cccccc',
            'fonticon' => '358',
            'order' => '3',
            'is_published' => 1,
            'published_at' => $faker->dateTimeThisYear($max = 'now')
        ]);


    }
}
