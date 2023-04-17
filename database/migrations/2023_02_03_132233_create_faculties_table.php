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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->integer("department_id")->nullable();
            $table->string("faculty_name")->nullable();
            $table->string("slug")->nullable();
            $table->string("faculty_img")->nullable();
            $table->string("faculty_qualification")->nullable();
            $table->date("date_of_join")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->longText("description")->nullable();
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
        Schema::dropIfExists('faculties');
    }
};
