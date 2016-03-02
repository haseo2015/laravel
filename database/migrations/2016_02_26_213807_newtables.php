<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Newtables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*
       Schema::create('materials', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('material_name',60);
            $table->string('slug')->index();
            $table->integer('count');
            $table->boolean('is_published');
            $table->dateTime('published_at');
            $table->timestamps();
        });

        Schema::create('material_project', function(Blueprint $table)
    {
        $table->increments('id');
        $table->integer('project_id')->unsigned();
        $table->integer('material_id')->unsigned();
        $table->timestamps();
    });
       */

        Schema::create('galleries', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('description_id')->unsigned();
            $table->string('image');
            $table->integer('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('materials');
        //Schema::drop('material_project');
        Schema::drop('galleries');
    }
}
