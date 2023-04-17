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
        Schema::create('page_manages', function (Blueprint $table) {
            $table->id();
            $table->text("page_name")->nullable();
            $table->string("image")->nullable();
            $table->longText("description")->nullable();
            $table->string("banner_img")->nullable();
            $table->enum('status', ['0', '1'])->comment('0->inactive 1->active');
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
        Schema::dropIfExists('page_manages');
    }
};
