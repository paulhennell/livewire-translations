<?php

namespace App\Http\Livewire;

use App\Data\Quote;
use App\Data\Quotes;
use App\Locale\Locale;
use Livewire\Component;

class QuoteBlock extends Component
{
    public Quote $quote;

    public function mount()
    {
        $this->newQuote();
    }

    public function newQuote()
    {
        $this->quote = Quotes::random();
    }



    protected $listeners = [
        'localeChanged' => 'render'
    ];

    public function hydrate()
    {
        Locale::load();
    }


    public function render()
    {
        return view('livewire.quote-block',[
            'lang' => Locale::get(),
        ]);
    }
}
