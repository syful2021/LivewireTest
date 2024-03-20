<?php

namespace App\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public $roll_id, $name, $email;

    public function render()
    {
        return view('livewire.registration');
    }

    public function submit()
    {
        // dd($this->roll_id,$this->name,$this->email);
    }
}
