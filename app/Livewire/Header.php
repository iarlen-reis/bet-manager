<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('components.header');
    }

    public function logout() {
        auth()->logout();

        return redirect("/login");
    }
}
