<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        //$this->call('CategoryTableSeeder');
        //$this->call('ArticleTableSeeder');
        //$this->call('UserTableSeeder');
        //$this->call('MacroCategoryTableSeeder');
        //$this->call('ProjectTableSeeder');
        //$this->call('DescriptionTableSeeder');

        //$this->call('MaterialSeeder');
        //$this->call('GenderTableSeeder');
        //$this->call('TypeSeeder');
        //$this->call('GalleryTableSeeder');
        //$this->call('SeriesTableSeeder');
        $this->call('GroupTableSeeder');
        Model::reguard();
    }
}
