<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Translation;

class TranslationsController extends Controller
{
    public function getAllTranslations(Request $request) {
        return Translation::where('language', $request->language)->all();
    }
}
