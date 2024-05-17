<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    #[Title('Bet Manager | Página Inicial')]
    public function render()
    {
        return view('pages.home-page');
    }
}
