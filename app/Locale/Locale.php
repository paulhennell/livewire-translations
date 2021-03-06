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
        app()->setLocale(static::get());
        return static::get();
    }

    public static function random()
    {
        return array_rand(array_flip(['en','fr']),1);
    }

    public static function all()
    {
        return [
            'en' => [
                'value' => 'en',
                'name' => 'English',
                'icon' => '🇬🇧',
            ],
            'fr' => [
                'value' => 'fr',
                'name' => 'French',
                'icon' => '🇫🇷',
            ],
        ];
    }
}
