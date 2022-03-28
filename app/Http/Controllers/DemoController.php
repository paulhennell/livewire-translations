<?php

namespace App\Http\Controllers;

use App\Data\Quotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DemoController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->has('lang')) {
            App::setLocale($request->lang);
        }
        return view('welcome', [
                'quote' => Quotes::random(),
                'lang' => $request->lang,
            ]
        );
    }
}
