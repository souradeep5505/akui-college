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
        Schema::create('seat_allocations', function (Blueprint $table) {
            $table->id();
            $table->integer("subject_id")->nullable();
            $table->string("sub_title")->nullable();
            $table->integer('total_seat')->nullable();
            $table->integer('ur')->nullable();
            $table->integer('sc')->nullable();
            $table->integer('st')->nullable();
            $table->integer('obc_a')->nullable();
            $table->integer('obc_b')->nullable();
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
        Schema::dropIfExists('seat_allocations');
    }
};
