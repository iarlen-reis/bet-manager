<?php

namespace App\Livewire;

use App\Models\Bet;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;

class BetDetail extends Component {
    #[Locked]
    public $id;

    #[Computed]
    public function bet() {
        $bet = Bet::findOrFail($this->id);

        $absNum = abs($bet->result);

        $abbreviated = match (true) {
            $absNum >= 1000000 => round($absNum / 1000000, 1) . 'M',
            $absNum >= 1000 => round($absNum / 1000, 1) . 'K',
            default => (string) $absNum,
        };

        $bet->result = ($bet->result < 0 ? '-' : '') . $abbreviated;

        return $bet;
    }

    public function delete() {
        $this->authorize('delete', $this->bet);

        $this->bet->delete();

        return redirect("/");
    }

    #[Title('Bet Manager | Detalhe da aposta')]
    public function render() {
        $this->authorize('view', $this->bet);

        return view('pages.bet-detail');}
}
