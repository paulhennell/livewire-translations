<?php

namespace App\Data;

use App\Locale\Locale;
use Illuminate\Support\Facades\App;
use Livewire\Wireable;

class Quote implements Wireable
{
    public function __construct(public string $author, private array $quote){}

    public function getQuote()
    {
        $lang = App::currentLocale();
        return $this->quote[$lang];
    }

    public function toLivewire()
    {
        return [
            'author' => $this->author,
            'quote' => $this->quote,
        ];
    }

    public static function fromLivewire($value)
    {
        return new Quote($value['author'], $value['quote']);
    }
}
