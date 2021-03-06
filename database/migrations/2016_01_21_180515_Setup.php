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
     /*  Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('slug_username')->index();
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
            $table->integer('serie_id')->unsigned()->index();
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
            $table->integer('punteggio');
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
        Schema::create('galleries', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('description_id')->unsigned();
            $table->string('image');
            $table->string('caption');
            $table->integer('order');
            $table->timestamps();
        });
        Schema::create('description_gallery', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('description_id');
            $table->integer('gallery_id');
            $table->timestamps();
        });

        Schema::create('genders', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('gender');
            $table->string('slug')->index();
            $table->integer('active');
            $table->timestamps();
        });
        Schema::create('project_gender', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('gender_id');
            $table->timestamps();
        });

        Schema::create('user_detail', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('bio');
            $table->date('birthday');
            $table->string('website');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google');
            $table->string('vimeo');
            $table->string('instagram');
            $table->timestamps();
        });

        Schema::create('description_gallery', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('description_id');
            $table->integer('gallery_id');
            $table->timestamps();
        });

        Schema::create('series', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('serie_name')->index();
            $table->string('serie_slug');
            $table->timestamps();
        });
        // pivot projects descriptions
        Schema::create('project_document', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->string('document_name');
            $table->integer('active');
            $table->timestamps();
        });

        Schema::create('project_media', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->string('media_url');
            $table->integer('active');
            $table->timestamps();
        });

        Schema::create('user_relations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('friend_user_id');
            $table->integer('status');
            $table->timestamps();
        });
     */
        Schema::create('groups', function(Blueprint $table)
        {
            $table->increments('group_id');
            $table->string('group_name');
            $table->string('group_slug')->index();
            $table->string('group_avatar');
            $table->integer('group_owner');
            $table->integer('active');
            $table->timestamps();
        });

        Schema::create('user_group', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('group_id');
            $table->string('user_id');
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
        Schema::drop('galleries');
        Schema::drop('genders');
        Schema::drop('project_gender');
        Schema::drop('user_detail');
        Schema::drop('description_gallery');
        Schema::drop('series');
        Schema::drop('project_document');
        Schema::drop('project_media');
        Schema::drop('user_relations');
        Schema::drop('groups');
        Schema::drop('user_group');
    }
}
