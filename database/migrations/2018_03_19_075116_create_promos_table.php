<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('type');
            $table->decimal('amount',8,2);
            $table->timestamps();
        });
        Schema::create('promo_use', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('promo_id')->unsigned();
            $table->integer('trip_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('promo_id')->references('id')->on('promos')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('trip_id')->references('id')->on('trips')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('promos');
        Schema::dropIfExists('promo_use');
    }
}
