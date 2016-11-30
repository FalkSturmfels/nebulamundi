<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('position')->unsigned();

            $table->integer('daydef_id')->unsigned();
            $table->foreign('daydef_id')->references('id')->on('day_defs')->onDelete('cascade');

            $table->integer('month_id')->unsigned();
            $table->foreign('month_id')->references('id')->on('months')->onDelete('cascade');

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
        Schema::drop('days');
    }
}
