<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->increments('id');
            $table->char('company', 50);
            $table->char('departure_station', 50);
            $table->char('arrival_station', 50);
            $table->time('departure_time', 0);
            $table->time('arrival_time', 0);
            $table->smallInteger('train_code');
            $table->tinyInteger('train_wagon');
            $table->boolean('in_time');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains');
    }
}
