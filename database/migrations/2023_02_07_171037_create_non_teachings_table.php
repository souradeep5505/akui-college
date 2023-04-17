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
        Schema::create('non_teachings', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("image")->nullable();
            $table->string("designation")->nullable();
            $table->string("qualification")->nullable();
            $table->date("date_of_join")->nullable();
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
        Schema::dropIfExists('non_teachings');
    }
};
