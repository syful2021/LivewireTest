<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;

class Registration extends Component
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
        $student = new Student;
        $student->rollno = $this->rollno;
        $student->name = $this->name;
        $student->email = $this->email;
        $student->save();
        $this->resetFilter();
    }
    public function resetFilter()
    {       // reset form after submit data
        $this->reset(['rollno', 'name', 'email']);
    }
}
