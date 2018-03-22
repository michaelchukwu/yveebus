<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('routes', function (Blueprint $table) {
            $table->integer('active')->after('amount')->default(0);
            $table->integer('bus_id')->unsigned()->after('active');
            $table->foreign('bus_id')->references('id')->on('buses')
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
        Schema::table('routes', function (Blueprint $table) {
            $table->dropColumn('active');
            $table->dropColumn('bus_id');
        });
    }
}
