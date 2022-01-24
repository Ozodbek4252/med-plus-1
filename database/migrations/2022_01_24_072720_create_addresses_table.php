<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /* Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('clinic_id')->nullable();
            $table->integer('doctor_id')->nullable();
            $table->integer('state')->nullable();
            $table->integer('city')->nullable();
            $table->string('street_ru')->nullable();
            $table->string('street_uz')->nullable();
            $table->string('apartment_ru')->nullable();
            $table->string('apartment_uz')->nullable();
            $table->string('moljal_ru')->nullable();
            $table->string('moljal_uz')->nullable();
            $table->timestamps();
        });
    }

    /* Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}