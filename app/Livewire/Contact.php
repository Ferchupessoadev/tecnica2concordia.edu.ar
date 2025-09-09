<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Contact extends Component
{
    public function send()
    {
        return redirect()->route('home');
    }

    #[Layout('components.layouts.app-header', ['title' => 'Contacto'])]
    public function render()
    {
        return view('livewire.contact');
    }
}
