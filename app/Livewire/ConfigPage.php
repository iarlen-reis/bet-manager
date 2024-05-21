<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ConfigPage extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Campo obrigatório')]
    public $name;

    #[Locked]
    public $email;

    public $photo;

    public $previewPhoto;


    public function mount()
    {
        $user = User::findOrFail(auth()->user()->id);

        $this->name = $user->name;
        $this->email = $user->email;
        $this->photo = $user->photo;
    }

    public function save()
    {
        $this->validate();

        if (!$this->previewPhoto) {
            User::findOrFail(auth()->id())
                ->update(
                    ['name' => $this->name]
                );

            return $this->dispatch('notification', [
                'type' => 'success',
                'message' => 'Configurações salvas com sucesso!',
            ]);
        }

        $uploadedFileUrl = cloudinary()->upload($this->previewPhoto->getRealPath())
            ->getSecurePath();

        User::findOrFail(auth()->id())
            ->update(
                ['name' => $this->name, 'email' => $this->email, 'photo' => $uploadedFileUrl]
            );

        return $this->dispatch('notification', [
            'type' => 'success',
            'message' => 'Configurações salvas com sucesso!',
        ]);
    }

    public function render()
    {
        return view('pages.config-page');
    }
}
