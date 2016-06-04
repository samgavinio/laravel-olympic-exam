<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnEventcompetitor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_competitors', function (Blueprint $table) {
            $table->integer('competitor_id')->unsigned();
            $table->foreign('competitor_id')->references('id')->on('competitors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('competitor_id');
        });
    }
}
