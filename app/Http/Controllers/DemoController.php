<?php

namespace App\Http\Controllers;

use App\Data\Quotes;
use App\Locale\Locale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DemoController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->has('lang')) {
            Locale::set($request->lang);
        } else {
            Locale::load();
        }
        return view('welcome', [
                'quote' => Quotes::random(),
                'lang' => Locale::get(),
            ]
        );
    }
}
