<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_events', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('participant_users_id')->unsigned();
            // $table->integer('events_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('events_id')->references('id')->on('events')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('participant_users_id')->references('id')->on('participant_users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participant_events');
    }
}
