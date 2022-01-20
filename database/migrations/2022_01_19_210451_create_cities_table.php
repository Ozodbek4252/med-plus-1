<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->integer('state_id');
            $table->string('city_uz');
            $table->string('city_ru');
            $table->timestamps();
        });

        DB::connection('mysql')->table('cities')->insert([
            [
                'state_id' => '1',
                'city_uz' => 'Bekobod',
                'city_ru' => 'Бекабад',
            ],
            [
                'state_id' => '1',
                'city_uz' => "Bo'stonliq",
                'city_ru' => "Бўстонлиқ",
            ],
            [
                'state_id' => '1',
                'city_uz' => "Boʻka",
                'city_ru' => "Бўка",
            ],
            [
                'state_id' => '1',
                'city_uz' => "Qibray",
                'city_ru' => "Қибрай",
            ],
            [
                'state_id' => '1',
                'city_uz' => "Ohangaron",
                'city_ru' => "Оҳангарон",
            ],
            [
                'state_id' => '1',
                'city_uz' => "Oqqoʻrgʻon",
                'city_ru' => "Оққўрғон",
            ],
            [
                'state_id' => '1',
                'city_uz' => "Parkent",
                'city_ru' => "Паркент",
            ],
            [
                'state_id' => '1',
                'city_uz' => "Piskent",
                'city_ru' => "Пискент",
            ],
            [
                'state_id' => '1',
                'city_uz' => "Quyi chirchiq",
                'city_ru' => "Қуйи чирчиқ",
            ],
            [
                'state_id' => '1',
                'city_uz' => "Oʻrta Chirchiq",
                'city_ru' => "Ўрта Чирчиқ",
            ],
            [
                'state_id' => '1',
                'city_uz' => "Yangiyoʻl",
                'city_ru' => "Янгийўл",
            ],
            [
                'state_id' => '1',
                'city_uz' => "Yuqori Chirchiq",
                'city_ru' => "Юқори Чирчиқ",
            ],
            [
                'state_id' => '1',
                'city_uz' => "Zangiota",
                'city_ru' => "Зангиота",
            ],




            [
                'state_id' => '2',
                'city_uz' => "Oltiariq",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Bagʻdod",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Beshariq",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Buvayda",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Dangʻara",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Fargʻona",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Furqat",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Qoʻshtepa",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Quva",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Rishton",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Soʻx",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Uchkoʻprik",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Oʻzbekiston",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Yozyovon",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Quvasoy",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Qo'qon",
                'city_ru' => "Oltiariq",
            ],
            [
                'state_id' => '2',
                'city_uz' => "Marg'ilon",
                'city_ru' => "Oltiariq",
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
        Schema::dropIfExists('cities');
    }
}
