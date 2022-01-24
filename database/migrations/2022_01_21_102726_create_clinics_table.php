<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicsTable extends Migration
{
    /* Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('logo')->nullable();
            $table->string('info_ru')->nullable();
            $table->string('info_uz')->nullable();
            $table->string('type')->nullable();
            $table->string('category')->nullable();
            $table->timestamps();
        });
    }

    /* Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinics');
    }
}