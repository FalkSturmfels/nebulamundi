<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdventuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique;
            $table->text('description');
            $table->enum('status', ['INWORK', 'RELEASED'])->default('INWORK');
            $table->timestamps();

            $table->integer('world_id')->unsigned()->unique();
            $table->foreign('world_id')->references('id')->on('worlds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adventure_world_user');
        Schema::drop('adventures');
    }
}
