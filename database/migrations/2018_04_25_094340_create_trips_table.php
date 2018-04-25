<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('from')->unsigned();
            $table->integer('to')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('driver_id')->unsigned();
            $table->integer('payment_id')->unsigned();
            $table->string('code');
            $table->integer('bus_id')->unsigned();
            $table->integer('duration');
            $table->integer('distance');
            $table->integer('completed');
            $table->timestamps();

            $table->foreign('from')->references('id')->on('locations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('to')->references('id')->on('locations')
                ->onUpdate('cascade')->onDelete('cascade');    
            $table->foreign('bus_id')->references('id')->on('buses')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('driver_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
