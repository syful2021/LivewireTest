<?php

namespace App\Livewire;

use Livewire\Component;

class Rhishi extends Component
{
    public $rollno;
    public $name;
    public $email;

    public function render()
    {
        return view('livewire.registration');
    }
    public function submit()
    {
        $this->validate([
            'rollno' => 'required | min:3 |max:10',
            'name' => 'required',
            'email' => 'required|email',
        ]);
    }
}
