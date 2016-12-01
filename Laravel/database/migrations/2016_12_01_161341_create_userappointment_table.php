<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserappointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('userappointment', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('fk_users')->unsigned();
                $table->foreign('fk_users')->references('id')->on('users');
                $table->integer('fk_appointment')->unsigned();
                $table->foreign('fk_appointment')->references('id')->on('appointment');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifexits('userappointmentA');
    }
}
