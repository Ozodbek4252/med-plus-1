<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateClinicTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_uz');
            $table->string('type_ru');
            $table->timestamps();
        });

        DB::connection('mysql')->table('clinic_types')->insert([
            [
                'type_uz' => 'public',
                'type_ru' => 'государственные',
            ],
            [
                'type_uz' => 'private',
                'type_ru' => 'частный',
            ]
        ]);
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinic_types');
    }
}
