<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\student;

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
        $this->validateOnly($field, [
            'name' => 'required',
            'rollno' => 'required|min:3|max:10',
            'email' => 'required | email'
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'rollno' => 'required|min:3|max:10',
            'email' => 'required | email'
        ]);
        $student = new student;
        $student->rollno = $this->rollno;
        $student->name = $this->name;
        $student->email = $this->email;

        $student->save();
        $this->resetFilter();
    }
    // resetFilter for reset form data after submit
    public function resetFilter()
    {
        $this->reset(['rollno', 'name', 'email']);
    }
}
