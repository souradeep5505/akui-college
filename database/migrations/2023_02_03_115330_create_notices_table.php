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
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->text("title")->nullable();
            $table->string("slug")->nullable();
            $table->dateTime("date_time")->nullable();
            $table->longText("description")->nullable();
            $table->longText("pdf_file")->nullable();
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
        Schema::dropIfExists('notices');
    }
};
