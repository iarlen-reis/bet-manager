<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginPage extends Component {
    #[Validate('required', message: 'Campo obrigatório')]
    public $email;

    #[Validate('required', message: 'Campo obrigatório')]
    public $password;

    #[Title('Bet Manager | Login')]
    public function render() {
        return view('pages.login-page');
    }

    public function login() {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if (!auth()->attempt($credentials)) {
            $this->addError('email', 'Credenciais inválidas');
            $this->addError('password', 'Credenciais inválidas');

            return;
        }

        return redirect("/");
    }
}
