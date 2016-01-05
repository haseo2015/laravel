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
        /*Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('slug')->index();

            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();

            $table->timestamps();
        });*/

        // creazione tabella articoli
        /*Schema::create('articles', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('title');
            $table->string('slug')->index();

            $table->longText('body');

            $table->boolean('is_published');
            $table->dateTime('published_at');

            $table->string('meta_keys');
            $table->string('meta_description');

            $table->integer('user_id')->unsigned()->index();

            $table->timestamps();
        });*/

        // creazione tabella categorie
        /*Schema::create('categories', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name');
            $table->string('slug')->index();

            $table->text('description');

            $table->timestamps();
        });*/

        // tabella pivot categorie-articoli
        /*Schema::create('article_category', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('article_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->timestamps();
        });*/

        Schema::create('navigations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->index();
            $table->integer('order');
            $table->boolean('is_published');
            $table->dateTime('published_at');
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

        // Tabella gallerie (elenco di immagini e testi per caption)
        Schema::create('galleries', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('item_id')->unsigned()->index();
            $table->string('name');
            $table->text('image_list');
            $table->text('caption');
            $table->boolean('is_published');
            $table->dateTime('published_at');
            $table->timestamps();
        });

        // tabella progetti
        Schema::create('projects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('macro_category_id')->unsigned()->index();
            $table->string('name');
            $table->boolean('is_published');
            $table->dateTime('published_at');
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
        Schema::create('project_description', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('project_id')->unsigned();
            $table->integer('description_id')->unsigned();

            $table->timestamps();
        });

        Schema::create('series', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('name');
            $table->boolean('is_published');
            $table->dateTime('published_at');
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
        // cancellazione tabella articoli
        Schema::drop('articles');
        // cancellazione tabella categorie
        Schema::drop('categories');
        // cancellazione tabella pivot
        Schema::drop('article_category');
    }
}
