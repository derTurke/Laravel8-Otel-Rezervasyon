<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('hotel_id')->nullable();
            $table->string('title',100)->nullable();
            $table->string('description',250)->nullable();
            $table->string('image',255)->nullable();
            $table->float('price')->nullable();
            $table->integer('adet')->nullable();
            $table->string('type',50)->nullable();
            $table->string('status',5)->nullable();
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
        Schema::dropIfExists('rooms');
    }
}
