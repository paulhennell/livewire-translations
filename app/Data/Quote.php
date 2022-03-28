<?php

namespace App\Data;

class Quote
{
    public function __construct(public string $author, private array $quote){}

    public function getQuote($lang = 'en')
    {
        return $this->quote[$lang];
    }
}
