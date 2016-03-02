<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Material;
use App\Project;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('it_IT');
        $materials = 30;
        $projectIds = $this->getProjectsIdsArray();

        for($c = 0; $c < $materials; $c++)
        {

            $name = $faker->text(25);
            $slug = Str::slug($name);


            $mats = Material::create([
                'material_name' => $name,
                'slug' => $slug,
                'count' => $faker->randomDigitNotNull,
                'is_published' => 1,
                'published_at' => $faker->dateTimeThisYear($max = 'now')
            ]);

            $mats->projects()->sync($faker->randomElements($projectIds, mt_rand(1, 5)));
        }

    }

    private function getProjectsIdsArray()
    {
        $result = [];

        $projects = Project::all();
        foreach($projects as $project)
        {
            $result[] = $project->id;
        }

        return $result;
    }
}

