<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsertoclubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userclub', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_users')->unsigned();
            $table->foreign('fk_users')->references('id')->on('users');
            $table->integer('fk_club')->unsigned();
            $table->foreign('fk_club')->references('id')->on('club');
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
        Schema::dropifexits('userclub');
    }
}
