<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialities', function (Blueprint $table) {
            $table->id();
            $table->string('speciality_id');
            $table->string('name');
            $table->timestamps();
        });
        $speciality_id = 1;
        DB::connection('mysql')->table('specialities')->insert([
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Акушер',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Аллерголог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Андролог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Анестезиолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Аудиолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Венеролог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Вертебролог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Врач СМП',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Врач ЛФК',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Гастроэнтеролог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Гепатолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Гинеколог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Генетик',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Гематолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Гинеколог-эндокринолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Гнойный хирург',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Дерматолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Дерматовенеролог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Диагност',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Диетолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Дефектолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Кардиолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Косметолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Кардиоревматолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Кинезитерапевт',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Кардиохирург',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Маммолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Массажист',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Мануальный терапевт',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Миколог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Нарколог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Невролог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Невропатолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Нейрофизиолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Нейрохирург',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Неонатолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Нефролог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Нейропсихолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Онколог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Ортопед',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Отоларинголог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Офтальмолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Офтальмохирург',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Остеопат',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Онкопроктолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Педиатр',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Пластический хирург',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Проктолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Психиатр',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Психолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Психотерапевт',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Пульмонолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Психоневролог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Паразитолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Подолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Ревматолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Репродуктолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Рентгенолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Радиолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Реаниматолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Реабилитолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Рефлексотерапевт',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Стоматолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Стоматолог-ортодонт',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Сомнолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Сексолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Стоматолог-имплантолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Стоматолог-ортопед',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Стоматолог-пародонтолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Стоматолог-терапевт',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Стоматолог-хирург',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Стоматолог-гигиенист',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Сурдолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Сосудистый хирург',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Терапевт',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Травматолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Трихолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Трансфузиолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Уролог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'УЗИ-специалист',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Физиотерапевт',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Флеболог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Хирург',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Химиотерапевт',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Эндокринолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Эпидемиолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Эпилептолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Эндоскопист',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Эмбриолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Инфекционист',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Иммунолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Цитогенетик',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Цитолог',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Лаборант',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Логопед',
            ],
            [
                'speciality_id' => $speciality_id++,
                'name' => 'Челюстно-лицевой хирург',
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
        Schema::dropIfExists('specialities');
    }
}


