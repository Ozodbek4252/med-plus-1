<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateClinicCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->timestamps();
        });

        DB::connection('mysql')->table('clinic_categories')->insert([
            [
                'category' => 'Больницы',
            ],
            [
                'category' => 'Детские больницы',
            ],
            [
                'category' => 'НИИ',
            ],
            [
                'category' => 'Диспансеры',
            ],
            [
                'category' => 'Скорая помощь',
            ],
            [
                'category' => 'Травмпункты',
            ],
            [
                'category' => 'Поликлиники',
            ],
            [
                'category' => 'Детские поликлиники',
            ],
            [
                'category' => 'Стоматологические поликлиники',
            ],
            [
                'category' => 'Женские консультации',
            ],
            [
                'category' => 'Роддома',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinic_categories');
    }
}
