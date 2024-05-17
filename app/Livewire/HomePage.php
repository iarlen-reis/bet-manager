<?php

namespace App\Livewire;

use App\Models\Bet;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    #[Title('Bet Manager | Página Inicial')]
    public function render()
    {
        return view('pages.home-page');
    }

    #[Computed]
    public function bets() {
        return Bet::where('user_id', auth()->user()->id)
            ->latest('created_at')
            ->take(4)
            ->get();
    }
}
