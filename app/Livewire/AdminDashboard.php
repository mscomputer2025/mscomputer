<?php

namespace App\Livewire;

use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.admin-dashboard', [
            'totalStudents' => 123,
            'totalCourses' => 10,
            'todaysRegistrations' => 5,
            'newInquiries' => 3,
        ]);
    }
}
