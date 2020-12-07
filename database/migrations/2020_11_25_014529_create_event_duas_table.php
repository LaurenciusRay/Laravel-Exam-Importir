<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventDuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_duas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_names');
            $table->string('event_categorys');
            $table->string('event_locations');
            $table->timestamp('event_dates');
            $table->text('event_descriptions');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_duas');
    }
}
