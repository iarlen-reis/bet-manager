<?php

namespace App\Livewire;

use App\Models\Bet;
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
    public $value;

    #[Validate('required', message: 'Campo obrigatório')]
    public $odds;

    #[Validate('required', message: 'Campo obrigatório')]
    public $sport;

    public $description;


    public function create() {
        $this->validate();

        Bet::create([
            'name' => $this->name,
            'market'=> $this->market,
            'status'=> $this->status,
            'value'=> $this->value,
            'odds'=> $this->odds,
            'sport'=> $this->sport,
            'description'=> $this->description,
            'user_id' => auth()->user()->id,
        ]);


        $this->dispatch('notification', [
            'type' => 'success',
            'message' => 'Aposta adicionada com sucesso!',
        ]);

        $this->reset('name', 'market', 'status', 'value', 'odds', 'sport', 'description');
    }

    public function render() {
        return view('pages.add-bet-page');
    }
}
