<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\MacroCategory;
use App\Description;
use App\User;

class DescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('it_IT');

        $projectsIds = 10;
        $projectIds = $this->getProjectsIdsArray();


        for($c = 0; $c <= $projectsIds; $c++)
        {
            //$idP = $faker->randomElements($projectIds, 1);

            $desk = Description::create([
            'step' => $faker->randomDigitNotNull,
            'body' =>  $faker->sentence(),
            'gallery_id' => 1,
            'is_published' => 1,
            'published_at' => $faker->dateTimeThisYear($max = 'now')
            ]);

            $desk->projects()->sync($faker->randomElements($projectIds, 1));

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
