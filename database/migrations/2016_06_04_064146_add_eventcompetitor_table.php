<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventcompetitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_competitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('score');
            $table->boolean('is_winning_team');
            $table->integer('event_id')->unsigned();            
            $table->foreign('event_id')->references('id')->on('events');
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
        Schema::drop('event_competitors');
    }
}
