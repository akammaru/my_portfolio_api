<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class BaseTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('translations')->insert([
            // dutch
            ["label" => "home", "category" => "page", "translation" => "thuis pagina", "language" => "nl", "created_at" => Carbon::now(), "updated_at" => Carbon::now() ],
            ["label" => "about", "category" => "page", "translation" => "over Bas", "language" => "nl", "created_at" => Carbon::now(), "updated_at" => Carbon::now() ],
            ["label" => "projects", "category" => "page", "translation" => "projecten", "language" => "nl", "created_at" => Carbon::now(), "updated_at" => Carbon::now() ],
            ["label" => "contact", "category" => "page", "translation" => "contact", "language" => "nl", "created_at" => Carbon::now(), "updated_at" => Carbon::now() ],
            ["label" => "name", "category" => "general", "translation" => "bas Horselenberg", "language" => "nl", "created_at" => Carbon::now(), "updated_at" => Carbon::now() ],

            //english
            ["label" => "home", "category" => "page", "translation" => "home page", "language" => "en", "created_at" => Carbon::now(), "updated_at" => Carbon::now() ],
            ["label" => "about", "category" => "page", "translation" => "about Bas", "language" => "en", "created_at" => Carbon::now(), "updated_at" => Carbon::now() ],
            ["label" => "projects", "category" => "page", "translation" => "projects", "language" => "en", "created_at" => Carbon::now(), "updated_at" => Carbon::now() ],
            ["label" => "contact", "category" => "page", "translation" => "contact", "language" => "en", "created_at" => Carbon::now(), "updated_at" => Carbon::now() ],
            ["label" => "name", "category" => "general", "translation" => "bas Horselenberg", "language" => "en", "created_at" => Carbon::now(), "updated_at" => Carbon::now() ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('translations')->
            where('category', 'page')->
            whereIn('label', ['home', 'about', 'projects', 'contact'])->
            delete();
        DB::table('translations')->
            where('category', 'general')->
            whereIn('label', ['name'])->
            delete();
    }
}
