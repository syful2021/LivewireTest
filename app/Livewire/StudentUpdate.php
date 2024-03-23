<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentUpdate extends Component
{
    public $store_id;
    public $name, $email, $rollno;
    public $active = true;

    public function render()
    {
        return view('livewire.student-update');
    }

}
