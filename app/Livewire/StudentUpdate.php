<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentUpdate extends Component
{
    public $store_id;
    public $name, $email, $rollno;
    public $check = true;

    public function render()
    {
        return view('livewire.student-update');
    }

    public function updateStudent()
    {
        $this->validate([
            'rollno' => 'required | min:3 |max:10',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $student = Student::find($this->store_id);
        $student->name = $this->name;
        $student->email = $this->email;
        $student->rollno = $this->rollno;
        $student->save();
        $this->check = false;
    }
}
