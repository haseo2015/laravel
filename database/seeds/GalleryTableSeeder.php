<?php

use Illuminate\Database\Seeder;
use App\Gallery;

class GalleryTableSeeder extends Seeder
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
        $galleryCount = 10;
        $imgs = $captions = "";
        for ($i=0;$i<=5;$i++){
            $imgs .= $faker->imageUrl($width = 640, $height = 480) . ", ";
            $captions .= $faker->sentence($nbWords = 3) . ", ";
        }

        for($c = 0; $c <= $galleryCount; $c++)
        {
            Gallery::create([
                'description_id' => 1,
                'name'=>$faker->sentence(),
                'image' => $imgs,
                'caption' => $captions,
                'is_published' => 1,
                'published_at' => $faker->dateTimeThisYear($max = 'now'),
            ]);
        }

    }
}
