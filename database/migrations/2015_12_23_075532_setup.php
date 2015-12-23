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

        // creazione tabella articoli
        Schema::create('articles', function(Blueprint $table)
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
        });

        // creazione tabella categorie
        Schema::create('categories', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name');
            $table->string('slug')->index();

            $table->text('description');

            $table->timestamps();
        });

        // tabella pivot categorie-articoli
        Schema::create('article_category', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('article_id')->unsigned();
            $table->integer('category_id')->unsigned();

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
