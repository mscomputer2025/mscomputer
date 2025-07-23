<?php



namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Students;

class RegisterController extends Controller
{
    public function showAdminForm()
    {
        return view('auth.admin-register');
    }

    public function showStudentForm()
    {
        return view('auth.student-register');
    }

    public function registerAdmin(Request $request)
    {
        $validated = $request->validate([
            'admin_name' => 'required|string|max:255',
            'admin_email' => 'required|email|unique:admin,admin_email',
            'admin_password' => 'required|string|min:6|confirmed',
        ]);

        Admin::create([
            'admin_name' => $validated['admin_name'],
            'admin_email' => $validated['admin_email'],
            'admin_password' => Hash::make($validated['admin_password']),
        ]);

        return redirect()->route('login')->with('success', 'Admin registered successfully!');
    }

    public function registerStudent(Request $request)
    {
        
        $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'student_email' => 'required|email|unique:students,student_email',
            'student_phone' => 'required',
            'student_course' => 'required',
            'student_address' => 'nullable',
            'student_password' => 'required|confirmed|min:6',
        ]);


        Students::create([
            'student_name' => $validated['student_name'],
            'student_email' => $validated['student_email'],
            'student_mobile' => $validated['student_phone'],
            'student_course' => $validated['student_course'],
            'student_address' => $validated['student_address'],
            'student_password' => Hash::make($validated['student_password']),
        ]);

        return redirect()->route('login')->with('success', 'Student registered successfully!');
    }
}
