<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Translation;
    use App\Models\Text;

    class TranslationsController extends Controller
    {
        public function getAllTranslations (Request $request)
        {
            return Translation::where('language', $request->language)->get();
        }

        public function getTexts (Request $request)
        {
            return Text::where([
                ['language', '=', $request->language],
                ['key', '=', $request->key]
            ])->get();
        }
    }
