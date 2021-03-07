<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function home($locale) {
        $local = $locale;
        \App::setLocale($locale);
        return view('home.index', compact('local'));
    }

    public function envirtualpedia($locale) {
        return view('virtualpedia.index', compact('local'));
    }
}