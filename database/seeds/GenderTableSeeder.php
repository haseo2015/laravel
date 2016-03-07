<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use \App\Gender;
use \App\Project;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('it_IT');
        $projectsID = $this->getProjectIdsArray();
        $genders = Array('anime', 'manga','videogames','films','telefilms','serie tv', 'altro');

        foreach($genders as $gender){
            $slug = Str::slug($gender);
            $_gender = Gender::create([
                'gender' => $gender,
                'slug' => $slug,
                'active' => 1
            ]);

            $_gender->projects()->sync($faker->randomElements($projectsID, mt_rand(1,1)));
        }
    }

    private function getProjectIdsArray()
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
