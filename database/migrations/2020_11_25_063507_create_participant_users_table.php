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
            $table->string('email');
            $table->string('phone_number');
            $table->string('profesion');
            $table->integer('event_id')->unsigned()->nullable();
            $table->integer('event_dua_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('event_dua_id')->references('id')->on('event_duas')->onDelete('cascade')->onUpdate('cascade');
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
