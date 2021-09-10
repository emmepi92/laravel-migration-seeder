<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->char('title', 255);
            $table->char('destination', 255);
            $table->text('description');
            $table->unsignedInteger('price'); //perchè non siamo tutti poveri
            $table->unsignedTinyInteger('days_num');
            $table->unsignedTinyInteger('max_people');
            $table->char('departure_city');
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
        Schema::dropIfExists('trips');
    }
}
