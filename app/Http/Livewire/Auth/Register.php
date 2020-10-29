<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\User;
use Hash;

class Register extends Component
{
    public $email = '';
    public $password = '';
    public $confirm_password = '';

    public function register()
    {

        $data = $this->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|same:confirm_password'
        ]);

        User::create([
            "email" => $data['email'],
            "name" => 'Hellli',
            "password" =>Hash::make($data['password'])
        ]);

        return \redirect('/');
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
