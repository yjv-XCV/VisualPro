<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->boolean('archived')->default(false);
            $table->timestamps();
        });

        Schema::create('configurations', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('background_img')->nullable();
            $table->integer('project_id')->unsigned()->index();
            //properties
            $table->integer('font_size')->unsigned()->default(20);
            $table->string('font')->nullable();
            $table->string('font_color')->nullable();
            $table->integer('positionY')->unsigned()->default(0);
            $table->string('font-style')->nullable();
            $table->string('text_aligned')->default('center');
            $table->timestamps();
        });

        Schema::create('songs', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('album_id')->nullable();
            $table->string('artist_id')->nullable();
            $table->timestamps();
        });

        Schema::create('albums', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('artists', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('projects_songs', function(Blueprint $table){
            $table->integer('project_id')->unsigned();
            $table->integer('song_id')->unsigned();
        });

        Schema::create('lyrics', function (Blueprint $table){
            $table->increments('id');
            $table->string('zh');
            $table->string('en');
            $table->integer('sequence')->unsigned()->index();
            $table->string('label')->nullable();
            $table->integer('song_id')->unsigned();
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
        //
        Schema::dropIfExists('projects');
        Schema::dropIfExists('configurations');
        Schema::dropIfExists('lyrics');
        Schema::dropIfExists('songs');
        Schema::dropIfExists('projects_songs');
        Schema::dropIfExists('albums');
        Schema::dropIfExists('artists');
    }
}
