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
            $table->string('category_uz');
            $table->string('category_ru');
            $table->timestamps();
        });

        DB::connection('mysql')->table('clinic_categories')->insert([
            [
                'category_uz' => 'Kasalxonalar',
                'category_ru' => 'Больницы',
            ],
            [
                'category_uz' => 'Bolalar shifoxonalari',
                'category_ru' => 'Детские больницы',
            ],
            [
                'category_uz' => 'Tadqiqot Instituti',
                'category_ru' => 'НИИ',
            ],
            [
                'category_uz' => 'Dispanserlar',
                'category_ru' => 'Диспансеры',
            ],
            [
                'category_uz' => 'Tez yordam',
                'category_ru' => 'Скорая помощь',
            ],
            [
                'category_uz' => 'Travma Markazlari',
                'category_ru' => 'Травмпункты',
            ],
            [
                'category_uz' => 'Poliklinikalar',
                'category_ru' => 'Поликлиники',
            ],
            [
                'category_uz' => 'Bolalar klinikalari',
                'category_ru' => 'Детские поликлиники',
            ],
            [
                'category_uz' => 'Stomatologiya klinikalari',
                'category_ru' => 'Стоматологические поликлиники',
            ],
            [
                'category_uz' => 'Ayollar maslahatchisi',
                'category_ru' => 'Женские консультации',
            ],
            [
                'category_uz' => "Tug'ruqxona",
                'category_ru' => 'Роддома',
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
