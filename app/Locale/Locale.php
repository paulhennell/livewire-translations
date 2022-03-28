<?php

namespace App\Locale;

use Illuminate\Support\Facades\App;

class Locale
{
    public static function get()
    {
        return session('locale', config('app.locale'));
    }

    public static function set($lang)
    {
        session()->put('locale', $lang);
        App::setLocale($lang);
    }

    public static function load()
    {
        App::setLocale(static::get());
    }
}
