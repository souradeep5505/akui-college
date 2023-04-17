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
        Schema::create('fees_structures', function (Blueprint $table) {
            $table->id();
            $table->string("type_of_fees")->nullable();
            $table->string("frequency");
            $table->float('programme', 8, 2);
            $table->float('honours', 8, 2);
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
        Schema::dropIfExists('fees_structures');
    }
};
