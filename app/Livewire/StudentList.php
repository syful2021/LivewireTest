<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentList extends Component
{
    public $students;

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
}
