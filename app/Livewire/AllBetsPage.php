<?php

namespace App\Livewire;

use App\Models\Bet;
use Carbon\Carbon;
use Livewire\Attributes\Computed;
use Livewire\Component;

class AllBetsPage extends Component
{
    public $filter;

    public $days;

    #[Computed]
    public function bets() {
        $query = Bet::orderBy("created_at", "desc")
            ->where("user_id", auth()->user()->id)
            ->where("status", "like", '%' . $this->filter . '%');

        // Adiciona condicionalmente o filtro de data se $this->days não estiver vazio
        $query->when($this->days, function ($q) {
            $startDate = Carbon::now()->subDays($this->days);
            $q->whereBetween('created_at', [$startDate, Carbon::now()]);
        });

        return $query->simplePaginate(6);
    }

    public function render()
    {
        return view('pages.all-bets-page');
    }
}
