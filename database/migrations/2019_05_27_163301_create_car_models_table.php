<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vin')->unique();
            $table->string('model_name');
            $table->string('model_type');
            $table->date('year');
            $table->string('transmission');
            $table->string('engine');
            $table->string('color');
            $table->string('equipment');
            $table->integer('price')->unsigned();
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
        Schema::dropIfExists('car_models');
    }
}
