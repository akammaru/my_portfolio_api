<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Carbon;

class FirstTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('translations')->insert([
            //dutch
            ["label" => "dutch", "category" => "language", "translation" => "nederlands", "language" => "nl", "created_at" => Carbon::now(), "updated_at" => Carbon::now() ],
            ["label" => "english", "category" => "language", "translation" => "engels", "language" => "nl", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],

            //english
            ["label" => "dutch", "category" => "language", "translation" => "dutch", "language" => "en", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["label" => "english", "category" => "language", "translation" => "english", "language" => "en", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('translations')
            ->where("label", "language_nl")
            ->delete();

        DB::table('translations')
            ->where("label", "language_en")
            ->delete();
    }
}
