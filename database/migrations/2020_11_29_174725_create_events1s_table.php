<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvents1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_names');
            $table->string('event_categorys');
            $table->string('event_locations');
            $table->string('event_dates');
            $table->string('event_descriptions');
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
        Schema::dropIfExists('events1s');
    }
}
