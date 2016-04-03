<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Group;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('it_IT');
        $utenti = $this->getUsersIDS();
        for ($i=1;$i<=6;$i++){
            $group_name = $faker->sentence();
            $group_slug = Str::slug($group_name);

            Group::create([
                'group_name' => $group_name,
                'group_slug' => $group_slug,
                'group_avatar' => "avatar".mt_rand(1,6).".jpg",
                'group_owner' => mt_rand(1, count($utenti)),
                'active' => 1,
                'created_at' => $faker->dateTimeThisYear($max = 'now')
                ]);
        }
    }


    private function getUsersIDS(){
        return \App\User::all();
    }
}
