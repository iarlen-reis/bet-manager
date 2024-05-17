<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegisterPage extends Component {
    #[Validate('required', message: 'Campo obrigatório')]
    public $name;

    #[Validate('required', message: 'Campo obrigatório')]
    public $email;

    #[Validate('required', message: 'Campo obrigatório')]
    public $password;

    #[Title('Bet Manager | Cadastro')]
    public function render() {
        return view('pages.register-page');
    }

    public function register() {
        $this->validate();

        $exist = User::where('email', $this->email)->first();

        if($exist){
            return $this->addError('email', 'E-mail já foi usado.');
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ])->save();

        return redirect('/login')->with('message', 'Conta criada com sucesso!');
    }
}
