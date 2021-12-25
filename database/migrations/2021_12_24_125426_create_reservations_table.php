<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('hotel_id');
            $table->integer('room_id');
            $table->string('name',75);
            $table->string('surname',75)->nullable();
            $table->string('email',100)->nullable();
            $table->string('phone',20)->nullable();
            $table->dateTime('checkin');
            $table->dateTime('checkout');
            $table->integer('days');
            $table->float('total');
            $table->integer('adults')->nullable();
            $table->integer('children')->nullable();
            $table->string('ip');
            $table->string('note')->nullable();
            $table->string('message')->nullable();
            $table->string('status',15)->default("New");
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
        Schema::dropIfExists('reservations');
    }
}
