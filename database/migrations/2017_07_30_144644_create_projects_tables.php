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
            $table->boolean('archieved')->default(false);
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
            $table->string('text_aligned')->default('center');
            $table->timestamps();
        });

        Schema::create('lyrics', function (Blueprint $table){
            $table->increments('id');
            $table->string('zh');
            $table->string('en');
            $table->integer('sequence')->unsigned()->index();
            $table->string('label')->nullable();
            $table->integer('project_id')->unsigned();
            $table->integer('configuration_id')->unsigned();
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
    }
}
