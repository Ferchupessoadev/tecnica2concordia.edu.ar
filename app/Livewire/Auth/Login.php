<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login(): void
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->redirect(route('home'));
        } else {
            $this->emit('error', 'Las credenciales proporcionadas no son válidas.');
        }
    }

    #[Layout('components.layouts.app-auth', ['title' => 'Login'])]
    public function render(): View
    {
        return view('livewire.auth.login');
    }
}
