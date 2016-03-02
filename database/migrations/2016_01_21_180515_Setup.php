<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Setup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // creazione tabella utenti
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('slug')->index();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

        // creazione tabella categorie
        Schema::create('macro_categories', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('parent_id');
            $table->string('name');
            $table->string('slug')->index();
            $table->text('category_color');
            $table->text('fonticon');
            $table->integer('order');
            $table->boolean('is_published');
            $table->dateTime('published_at');
            $table->timestamps();
        });

        // tabella progetti
        Schema::create('projects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('macro_category_id')->unsigned()->index();
            $table->string('name',54);
            $table->string('slug')->index();
            $table->integer('state');
            $table->integer('progress');
            $table->string('meta_keys');
            $table->string('short_description');
            $table->boolean('is_published');
            $table->dateTime('published_at');
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();
        });

        Schema::create('descriptions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('step');
            $table->longText('body');
            $table->integer('gallery_id')->unsigned()->index();
            $table->boolean('is_published');
            $table->dateTime('published_at');
            $table->timestamps();
        });
        // pivot projects descriptions
        Schema::create('description_project', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('description_id')->unsigned();
            $table->timestamps();
        });

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

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // cancellazione tabella utenti
        Schema::drop('users');
        Schema::drop('macro_categories');
        Schema::drop('projects');
        Schema::drop('descriptions');
        Schema::drop('description_project');
        Schema::drop('materials');
        Schema::drop('material_project');

    }
}
