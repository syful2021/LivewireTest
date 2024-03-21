<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentList extends Component
{
    public $students;
    public $store_id;
    public $name, $email, $rollno;
    public $check = true;

    public function mount()
    {
        $this->students = Student::all();
    }

    public function render()
    {
        return view('livewire.student-list');
    }
        // Delete
    public function deleteStu($id)
    {
        Student::find($id)->delete();
        
        $this->mount();
    }
        // Update
    public function updateData($id)
    {
        $this->store_id = $id;
        $student = Student::find($id);
        $this->name = $student->name;
        $this->email = $student->email;
        $this->rollno = $student->rollno;
        $this->check = false;
    }
}
