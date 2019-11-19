<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_user', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('description');
            $table->integer('user_id')->unsigned();
            $table->integer('property_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('property_id')->references('id')->on('properties');
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
        Schema::dropIfExists('property_user');
    }
}
