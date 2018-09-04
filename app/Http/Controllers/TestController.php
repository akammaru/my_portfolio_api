<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getAnime (Request $request)
    {
        return Test::findOrFail($request->id);
    }
}
