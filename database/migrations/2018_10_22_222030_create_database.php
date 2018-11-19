<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


         Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('cover');
            $table->smallInteger('year');
            $table->smallInteger('length');
            $table->text('resume');
            $table->string('netflix')->nullable;
            $table->string('trailer')->nullable;
            $table->timestampsTz();


        });

         Schema::create('genres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestampsTz();

        });

         Schema::create('actors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestampsTz();
            

        });

         Schema::create('producers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestampsTz();

        });

         Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->timestampsTz();
            $table->string('name');

        });

         Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('user_id');
            $table->smallInteger('genre_id');
            $table->smallInteger('genre_score');
            $table->smallInteger('tag_id');
            $table->smallInteger('tag_score');
            $table->timestampsTz();
            

        });

         Schema::create('actor_movie', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('movie_id');
            $table->smallInteger('actor_id');
        });

         Schema::create('genre_movie', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('movie_id');
            $table->smallInteger('genre_id');
        });

        Schema::create('genre_user', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('user_id');
            $table->smallInteger('genre_id');
        });

        Schema::create('movie_producer', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('movie_id');
            $table->smallInteger('producer_id');
        });

        Schema::create('movie_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('movie_id');
            $table->smallInteger('tag_id');
        });

        Schema::create('tag_user', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('user_id');
            $table->smallInteger('tag_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
        Schema::dropIfExists('genres');
        Schema::dropIfExists('actors');
        Schema::dropIfExists('producers');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('actor_movie');
        Schema::dropIfExists('genre_movie');
        Schema::dropIfExists('genre_user');
        Schema::dropIfExists('movie_producer');
        Schema::dropIfExists('movie_tag');
        Schema::dropIfExists('tag_user');


        //
    }
}
