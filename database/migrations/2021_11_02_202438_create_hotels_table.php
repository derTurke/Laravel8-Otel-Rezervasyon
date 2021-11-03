<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',100);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',250)->nullable();
            $table->integer('category_id');
            $table->text('detail')->nullable();
            $table->integer("star")->nullable();
            $table->text("address");
            $table->string('phone',25);
            $table->string('fax',25);
            $table->string('email',100);
            $table->string('city',50);
            $table->string('country',50);
            $table->text('location');
            $table->integer('user_id');
            $table->string('status',5);
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
        Schema::dropIfExists('hotels');
    }
}
