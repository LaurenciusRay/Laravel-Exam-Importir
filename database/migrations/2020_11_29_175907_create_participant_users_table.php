<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('age');
            $table->string('email')->unique();
            $table->bigInteger('phone_number');
            $table->string('profesion')->nullable();
            $table->integer('event_id')->unsigned()->nullable();
            $table->integer('events_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('events_id')->references('id')->on('events1s')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participant_users');
    }
}