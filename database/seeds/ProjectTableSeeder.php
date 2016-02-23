<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Project;
use App\MacroCategory;
use App\User;


class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('it_IT');

        $articlesCount = 10;
        //$descriptionsIds = $this->getDescriptionsIdsArray();


        for($c = 0; $c < $articlesCount; $c++)
        {
            $name = $faker->text(54);
            $slug = Str::slug($name);

            // creo l'articolo
            $project = Project::create([
                'name' => f,
                'slug' => $slug,
                'state' => $faker->boolean(80),
                'progress' => $faker->unique()->randomDigit,
                'meta_keys' => implode(',', $faker->words(5)),
                'short_description' => $faker->sentence(),
                'is_published' => $faker->boolean(80),
                'published_at' => $faker->dateTimeThisYear($max = 'now'),
                // associo casualmente un autore all'articolo
                'user_id' => User::orderByRaw('RAND()')->first()->id
            ]);

            // associo le categorie casualmente (una o due per articolo)
            //$project->descriptions()->sync($faker->randomElements($descriptionsIds, 1));
        }
    }


    private function getDescriptionsIdsArray()
    {
        $result = [];

        $categories = \App\Description::all();
        foreach($categories as $category)
        {
            $result[] = $category->id;
        }

        return $result;
    }
}
