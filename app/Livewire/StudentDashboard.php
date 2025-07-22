<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class StudentDashboard extends Component
{
    public $student;
    public $enrollments;
    public $announcements;

    public function mount()
    {
        $this->student = Auth::guard('student')->user();
        $this->enrollments = $this->student->with('courses')->get();
      
    }

    public function render()
    {
        return view('livewire.student-dashboard');
    }
}
