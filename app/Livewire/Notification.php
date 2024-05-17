<?php

namespace App\Livewire;

use Livewire\Component;

class Notification extends Component
{
    public $type;
    public $message;

    protected $listeners = ["notification"=> "notify"];
    public function render()
    {
        return view('components.notification');
    }

    public function notify($props) {
        $this->type = $props['type'];
        $this->message = $props['message'];
    }
}
