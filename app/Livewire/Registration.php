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
            // updated for show live Validation
    public function updated($field)
    {
        $this->validateOnly([
            'name' => 'required',
            'rollno' => 'required|min:3|max:10',
            'email' => 'required | email'
        ])
    }

    public function submit()
    {
        $this->validate(
            'name' => 'required',
            'rollno' => 'required|min:3|max:10',
            'email' => 'required | email'
        )
    }
}
