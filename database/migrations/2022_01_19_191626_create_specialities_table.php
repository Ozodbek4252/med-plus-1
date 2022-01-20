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
            $table->string('name_uz');
            $table->string('name_ru');
            $table->timestamps();
        });

        DB::connection('mysql')->table('specialities')->insert([
            [
                'name_ru' => 'Акушер',
                'name_uz' => 'Akusher',
            ],
            [
                'name_ru' => 'Аллерголог',
                'name_uz' => 'Allergist',
            ],
            [
                'name_ru' => 'Андролог',
                'name_uz' => 'Androlog',
            ],
            [
                'name_ru' => 'Анестезиолог',
                'name_uz' => 'Anestezist',
            ],
            [
                'name_ru' => 'Аудиолог',
                'name_uz' => 'Audiolog',
            ],
            [
                'name_ru' => 'Венеролог',
                'name_uz' => 'Venerolog',
            ],
            [
                'name_ru' => 'Вертебролог',
                'name_uz' => 'Vertebrolog',
            ],
            [
                'name_ru' => 'Врач СМП',
                'name_uz' => 'SMP Doktor',
            ],
            [
                'name_ru' => 'Врач ЛФК',
                'name_uz' => 'LFK Doktor',
            ],
            [
                'name_ru' => 'Гастроэнтеролог',
                'name_uz' => 'Gastroenterolog',
            ],
            [
                'name_ru' => 'Гепатолог',
                'name_uz' => 'Gepatolog',
            ],
            [
                'name_ru' => 'Гинеколог',
                'name_uz' => 'Ginekolog',
            ],
            [
                'name_ru' => 'Генетик',
                'name_uz' => 'Genetik',
            ],
            [
                'name_ru' => 'Гематолог',
                'name_uz' => 'Gematolog',
            ],
            [
                'name_ru' => 'Гинеколог-эндокринолог',
                'name_uz' => 'Ginekolog-endokrinolog',
            ],
            [
                'name_ru' => 'Гнойный хирург',
                'name_uz' => 'Yiring jarrohi',
            ],
            [
                'name_ru' => 'Дерматолог',
                'name_uz' => 'Dermatolog',
            ],
            [
                'name_ru' => 'Дерматовенеролог',
                'name_uz' => 'Dermatovenerolog',
            ],
            [
                'name_ru' => 'Диагност',
                'name_uz' => 'Diagnostik',
            ],
            [
                'name_ru' => 'Диетолог',
                'name_uz' => 'Dietolog',
            ],
            [
                'name_ru' => 'Дефектолог',
                'name_uz' => 'Defektolog',
            ],
            [
                'name_ru' => 'Кардиолог',
                'name_uz' => 'Kardiolog',
            ],
            [
                'name_ru' => 'Косметолог',
                'name_uz' => 'Kosmetolog',
            ],
            [
                'name_ru' => 'Кардиоревматолог',
                'name_uz' => 'Kardiorevmatolog',
            ],
            [
                'name_ru' => 'Кинезитерапевт',
                'name_uz' => 'Kinesiterapevt',
            ],
            [
                'name_ru' => 'Кардиохирург',
                'name_uz' => 'Kardiojarroh',
            ],
            [
                'name_ru' => 'Маммолог',
                'name_uz' => 'Mammolog',
            ],
            [
                'name_ru' => 'Массажист',
                'name_uz' => 'Massajchi',
            ],
            [
                'name_ru' => 'Мануальный терапевт',
                'name_uz' => 'Chiropraktor',
            ],
            [
                'name_ru' => 'Миколог',
                'name_uz' => 'Mikolog',
            ],
            [
                'name_ru' => 'Нарколог',
                'name_uz' => 'Narkolog',
            ],
            [
                'name_ru' => 'Невролог',
                'name_uz' => 'Nevrolog',
            ],
            [
                'name_ru' => 'Невропатолог',
                'name_uz' => 'Nevropatolog',
            ],
            [
                'name_ru' => 'Нейрофизиолог',
                'name_uz' => 'Neyrofiziolog',
            ],
            [
                'name_ru' => 'Нейрохирург',
                'name_uz' => 'Neyroxirurg',
            ],
            [
                'name_ru' => 'Неонатолог',
                'name_uz' => 'Neonatolog',
            ],
            [
                'name_ru' => 'Нефролог',
                'name_uz' => 'Nefrolog',
            ],
            [
                'name_ru' => 'Нейропсихолог',
                'name_uz' => 'Nevropsixolog',
            ],
            [
                'name_ru' => 'Онколог',
                'name_uz' => 'Onkolog',
            ],
            [
                'name_ru' => 'Ортопед',
                'name_uz' => 'Ortoped',
            ],
            [
                'name_ru' => 'Отоларинголог',
                'name_uz' => 'Otorinolaringolog',
            ],
            [
                'name_ru' => 'Офтальмолог',
                'name_uz' => 'Oftalmolog',
            ],
            [
                'name_ru' => 'Офтальмохирург',
                'name_uz' => 'Oftalmik jarroh',
            ],
            [
                'name_ru' => 'Остеопат',
                'name_uz' => 'Osteopat',
            ],
            [
                'name_ru' => 'Онкопроктолог',
                'name_uz' => 'Onkoproktolog',
            ],
            [
                'name_ru' => 'Педиатр',
                'name_uz' => 'Pediatr',
            ],
            [
                'name_ru' => 'Пластический хирург',
                'name_uz' => 'Plastik Jarroh',
            ],
            [
                'name_ru' => 'Проктолог',
                'name_uz' => 'Proktolog',
            ],
            [
                'name_ru' => 'Психиатр',
                'name_uz' => 'Psixiatr',
            ],
            [
                'name_ru' => 'Психолог',
                'name_uz' => 'Psixolog',
            ],
            [
                'name_ru' => 'Психотерапевт',
                'name_uz' => 'Psixoterapevt',
            ],
            [
                'name_ru' => 'Пульмонолог',
                'name_uz' => 'Pulmonolog',
            ],
            [
                'name_ru' => 'Психоневролог',
                'name_uz' => 'Neyropsixiatr',
            ],
            [
                'name_ru' => 'Паразитолог',
                'name_uz' => 'Parazitolog',
            ],
            [
                'name_ru' => 'Подолог',
                'name_uz' => 'Podiatrist',
            ],
            [
                'name_ru' => 'Ревматолог',
                'name_uz' => 'Revmatolog',
            ],
            [
                'name_ru' => 'Репродуктолог',
                'name_uz' => 'Reproduktolog',
            ],
            [
                'name_ru' => 'Рентгенолог',
                'name_uz' => 'Rentgenolog',
            ],
            [
                'name_ru' => 'Радиолог',
                'name_uz' => 'Radiolog',
            ],
            [
                'name_ru' => 'Реаниматолог',
                'name_uz' => 'Reanimatolog',
            ],
            [
                'name_ru' => 'Реабилитолог',
                'name_uz' => 'Reabilitolog',
            ],
            [
                'name_ru' => 'Рефлексотерапевт',
                'name_uz' => 'Refleksolog',
            ],
            [
                'name_ru' => 'Стоматолог',
                'name_uz' => 'Tish shifokori',
            ],
            [
                'name_ru' => 'Стоматолог-ортодонт',
                'name_uz' => 'Stomatolog-ortodontist',
            ],
            [
                'name_ru' => 'Сомнолог',
                'name_uz' => 'Somnolog',
            ],
            [
                'name_ru' => 'Сексолог',
                'name_uz' => 'Seksolog',
            ],
            [
                'name_ru' => 'Стоматолог-имплантолог',
                'name_uz' => 'Stomatolog-implantolog',
            ],
            [
                'name_ru' => 'Стоматолог-ортопед',
                'name_uz' => 'Stomatolog-ortoped',
            ],
            [
                'name_ru' => 'Стоматолог-пародонтолог',
                'name_uz' => 'Stomatolog-periodontolog',
            ],
            [
                'name_ru' => 'Стоматолог-терапевт',
                'name_uz' => 'Stomatolog-terapevt',
            ],
            [
                'name_ru' => 'Стоматолог-хирург',
                'name_uz' => 'Stomatolog-jarroh',
            ],
            [
                'name_ru' => 'Стоматолог-гигиенист',
                'name_uz' => 'Stomatolog-gigienist',
            ],
            [
                'name_ru' => 'Сурдолог',
                'name_uz' => 'Surdolog',
            ],
            [
                'name_ru' => 'Сосудистый хирург',
                'name_uz' => 'Qon tomir jarrohi',
            ],
            [
                'name_ru' => 'Терапевт',
                'name_uz' => 'Terapevt',
            ],
            [
                'name_ru' => 'Травматолог',
                'name_uz' => 'Travmatolog',
            ],
            [
                'name_ru' => 'Трихолог',
                'name_uz' => 'Trixolog',
            ],
            [
                'name_ru' => 'Трансфузиолог',
                'name_uz' => 'Transfuziolog',
            ],
            [
                'name_ru' => 'Уролог',
                'name_uz' => 'Urolog',
            ],
            [
                'name_ru' => 'УЗИ-специалист',
                'name_uz' => 'UZI-mutaxassis',
            ],
            [
                'name_ru' => 'Физиотерапевт',
                'name_uz' => 'Fizioterapevt',
            ],
            [
                'name_ru' => 'Флеболог',
                'name_uz' => 'Flebolog',
            ],
            [
                'name_ru' => 'Хирург',
                'name_uz' => 'Jarroh',
            ],
            [
                'name_ru' => 'Химиотерапевт',
                'name_uz' => 'Kimyoterapist',
            ],
            [
                'name_ru' => 'Эндокринолог',
                'name_uz' => 'Endokrinolog',
            ],
            [
                'name_ru' => 'Эпидемиолог',
                'name_uz' => 'Epidemiolog',
            ],
            [
                'name_ru' => 'Эпилептолог',
                'name_uz' => 'Epileptolog',
            ],
            [
                'name_ru' => 'Эндоскопист',
                'name_uz' => 'Endoskopist',
            ],
            [
                'name_ru' => 'Эмбриолог',
                'name_uz' => 'Embriolog',
            ],
            [
                'name_ru' => 'Инфекционист',
                'name_uz' => 'Infeksionist',
            ],
            [
                'name_ru' => 'Иммунолог',
                'name_uz' => 'Immunolog',
            ],
            [
                'name_ru' => 'Цитогенетик',
                'name_uz' => 'Sitogenetik',
            ],
            [
                'name_ru' => 'Цитолог',
                'name_uz' => 'Sitolog',
            ],
            [
                'name_ru' => 'Лаборант',
                'name_uz' => 'Laborant',
            ],
            [
                'name_ru' => 'Логопед',
                'name_uz' => 'Nutq terapevti',
            ],
            [
                'name_ru' => 'Челюстно-лицевой хирург',
                'name_uz' => 'Maksillofasiyal jarroh',
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


