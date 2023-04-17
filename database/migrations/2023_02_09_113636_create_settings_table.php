<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->text("address")->nullable();
            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("youtube")->nullable();
            $table->string("logo")->nullable();
            $table->text("google_map")->nullable();
            $table->string("state")->nullable();
            $table->string("pin_code")->nullable();
            $table->integer("campus_area")->nullable();
            $table->integer("libary_books")->nullable();
            $table->integer("honours_student")->nullable();
            $table->integer("general_student")->nullable();
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
};
