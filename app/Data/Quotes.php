<?php

namespace App\Data;

class Quotes
{
    public function __construct()
    {
        $this->data = collect([
            new Quote('Nelson Mandela',
                 [
                    'en' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.',
                    'fr' => "La plus grande gloire de vivre ne réside pas dans le fait de ne jamais tomber, mais dans le fait de se relever à chaque fois que nous tombons.",
                 ]),
            new Quote('Steve Jobs',
                [
                    'en' => "Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma – which is living with the results of other people's thinking",
                    'fr' => "Votre temps est limité, alors ne le gaspillez pas à vivre la vie de quelqu'un d'autre. Ne vous laissez pas piéger par le dogme - qui consiste à vivre avec les résultats de la pensée des autres",
                ]),
            new Quote('John Lennon',
                [
                    'en' => "Life is what happens when you're busy making other plans",
                    'fr' => "La vie, c'est ce qui se passe quand on est occupé à faire d'autres projets" ,
                ]),
            new Quote('Babe Ruth',
                [
                    'en' => "Never let the fear of striking out keep you from playing the game",
                    'fr' => "Ne laissez jamais la peur du retrait vous empêcher de jouer le jeu",
                ]),
        ]);
    }

    public static function all()
    {
        return (new Quotes())->data;
    }

    public static function random(): Quote{
        return static::all()->random();
    }
}
