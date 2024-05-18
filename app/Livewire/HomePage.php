<?php

namespace App\Livewire;

use App\Models\Bet;
use Carbon\Carbon;
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


    #[Computed]
    public function allBetsCount() {
        return Bet::where('user_id', auth()->id())->count();
    }

    #[Computed]
    public function allBetTodayCount () {
        return Bet::where('user_id', auth()->user()->id)
        ->whereDate('created_at', Carbon::today())
        ->count();
    }

    #[Computed]
    public function allMoneyBettingFormatted() {
        $total = Bet::where('user_id', auth()->user()->id)
        ->sum('result');

        $absNum = abs($total);
        $abbreviated = match (true) {
            $absNum >= 1000000 => round($absNum / 1000000, 1) . 'M',
            $absNum >= 1000 => round($absNum / 1000, 1) . 'K',
            default => (string) $absNum,
        };
        return ($total < 0 ? '-' : '') . $abbreviated;
    }

    #[Computed]
    public function allMoneyBetting() {
        return Bet::where('user_id', auth()->user()->id)
        ->sum('result');
    }
}
