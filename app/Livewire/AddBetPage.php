<?php

namespace App\Livewire;

use App\Models\Bet;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddBetPage extends Component {
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


    public function create() {
        $this->validate();

        $result = match ($this->status) {
            'red' => number_format($this->amount * -1, 2, '.', ''),
            'green'=> number_format($this->amount * $this->odds, 2, '.', ''),
            default => 0,
        };

        Bet::create([
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


        $this->dispatch('notification', [
            'type' => 'success',
            'message' => 'Aposta adicionada com sucesso!',
        ]);

        $this->reset('name', 'market', 'status', 'amount', 'odds', 'sport', 'description');
    }

    #[Title('Bet Manager | Adicionar aposta')]
    public function render() {
        return view('pages.add-bet-page');
    }
}
