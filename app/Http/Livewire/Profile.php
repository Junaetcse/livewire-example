<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Profile extends Component
{

    public $name = "";
    public $about = "";
    public $saved = false;
    public function mount()
    {
        $auth = User::find(1);
        $this->name =$auth->name;
        $this->about =$auth->about;
        
    }


    public function save()
    {
        $profile_data = $this->validate([
            "name" => "max:24",
            "about" => "max:140"
        ]);
        $auth = User::find(1);

        $auth->update($profile_data);
        $this->saved = true;
    }
    public function render()
    {
        return view('livewire.profile')->layout('layouts.base')->slot('body');;
    }
}
