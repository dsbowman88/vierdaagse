<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
//            $table->unsignedInteger('school_id'); // Not needed
            $table->unsignedInteger('tour_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

//            $table->foreign('school_id')->references('id')->on('schools'); // Not needed
            $table->foreign('tour_id')->references('id')->on('tours');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
