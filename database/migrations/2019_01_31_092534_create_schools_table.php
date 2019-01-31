<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('schoolname');
            $table->unsignedInteger('group_size');
            $table->unsignedInteger('tour_id');
            $table->unsignedInteger('user_id');
            $table->string('contact');
            $table->string('email');
            $table->string('phonenumber');

            $table->timestamps();

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
        Schema::dropIfExists('schools');
    }
}
