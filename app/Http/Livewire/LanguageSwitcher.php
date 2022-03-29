<?php

namespace App\Http\Livewire;

use App\Locale\Locale;
use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $lang;

    public function mount()
    {
        $this->lang = Locale::load();
    }

    public function hydrate()
    {
        $this->lang = Locale::load();
    }

    public function changeLang(string $lang)
    {
        Locale::set($lang);
        $this->lang = $lang;
//        return redirect(request()->header('Referer'));
        $this->emit('localeChanged');
    }


    public function render()
    {
        return view('livewire.language-switcher',[
            'langs' => Locale::all()
                ]);
    }
}
