<?php

namespace App\Livewire\Auth;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ForgotPassword extends Component
{
    #[Layout('components.layouts.app-auth', ['title' => 'Recuperar contraseña'])]
    public function render(): View
    {
        return view('livewire.auth.forgot-password');
    }
}
