<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('state_uz');
            $table->string('state_ru');
            $table->timestamps();
        });

        DB::connection('mysql')->table('states')->insert([
            [
                'state_uz' => 'Toshkent',
                'state_ru' => 'Ташкент',
            ],
            [
                'state_uz' => "Farg'ona",
                'state_ru' => 'Фергана',
            ],
            [
                'state_uz' => 'Andijon',
                'state_ru' => 'Андижан',
            ],
            [
                'state_uz' => 'Namangan',
                'state_ru' => 'Наманган',
            ],
            [
                'state_uz' => 'Buxoro',
                'state_ru' => 'Бухара',
            ],
            [
                'state_uz' => 'Jizzax',
                'state_ru' => 'Джизакс',
            ],
            [
                'state_uz' => 'Xorazm',
                'state_ru' => 'Хорезм',
            ],
            [
                'state_uz' => 'Navoiy',
                'state_ru' => 'Навои',
            ],
            [
                'state_uz' => 'Qashqadaryo',
                'state_ru' => 'Кашкадарья',
            ],
            [
                'state_uz' => "Qoraqalpog'iston",
                'state_ru' => 'Каракалпакстан',
            ],
            [
                'state_uz' => 'Samarqand',
                'state_ru' => 'Самарканд',
            ],
            [
                'state_uz' => 'Sirdaryo',
                'state_ru' => 'Сырдарья',
            ],
            [
                'state_uz' => 'Surxondaryo',
                'state_ru' => 'Сурхандарья',
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
        Schema::dropIfExists('states');
    }
}
