<?php

namespace App\Http\Livewire;

use App\Data\Quotes;
use App\Locale\Locale;
use Livewire\Component;

class QuoteBlock extends Component
{

    public function refresh()
    {
        $this->render();
    }

    public function hydrate()
    {
        Locale::load();
    }

    public function render()
    {
        return view('livewire.quote-block',[
            'quote' => Quotes::random(),
            'lang' => Locale::get(),
        ]);
    }
}
