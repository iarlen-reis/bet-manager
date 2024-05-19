<?php

namespace App\Livewire;

use App\Models\Bet;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BetEditPage extends Component {
    #[Locked]
    public $id;

    #[Validate('required', message: 'Campo obrigatório')]
    public $name;

    #[Validate('required', message: 'Campo obrigatório')]
    public $market;

    #[Validate('required', message: 'Campo obrigatório')]
    public $status = 'pedding';

    #[Validate('required', message: 'Campo obrigatório')]
    public $amount;

    #[Validate('required', message: 'Campo obrigatório')]
    public $odds;

    #[Validate('required', message: 'Campo obrigatório')]
    public $sport;

    public $description;

    public function mount($id) {
        $bet = Bet::findOrFail($id);

        $this->name = $bet->name;
        $this->market = $bet->market;
        $this->status = $bet->status;
        $this->amount = $bet->amount;
        $this->odds = $bet->odds;
        $this->sport = $bet->sport;
        $this->description = $bet->description;
    }

    public function update() {
        $this->validate();

        $bet = Bet::findOrFail($this->id);

        $this->authorize('update', $bet);

        $result = match ($this->status) {
            'red' => number_format($this->amount * -1, 2, '.', ''),
            'green'=> number_format($this->amount * $this->odds, 2, '.', ''),
            default => 0,
        };

        $bet->update([
            'name' => $this->name,
            'market'=> $this->market,
            'status'=> $this->status,
            'amount'=> $this->amount,
            'odds'=> $this->odds,
            'sport'=> $this->sport,
            'description'=> $this->description,
            'user_id' => auth()->user()->id,
            'result' => (float) $result,
        ]);

        return redirect("/aposta/$bet->id");
    }

    public function render() {
        return view('pages.bet-edit-page');
    }
}
