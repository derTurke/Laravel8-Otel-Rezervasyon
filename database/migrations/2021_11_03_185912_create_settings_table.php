<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',100);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('company',100)->nullable();
            $table->text('address')->nullable();
            $table->string('phone',25)->nullable();
            $table->string('fax',25)->nullable();
            $table->string('email',50)->nullable();
            $table->string('smtpserver',100)->nullable();
            $table->string('smtpemail',50)->nullable();
            $table->string('smtppassword',50)->nullable();
            $table->integer('smtpport')->nullable()->default(0);
            $table->string('facebook',75)->nullable();
            $table->string('twitter',75)->nullable();
            $table->string('instagram',75)->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
