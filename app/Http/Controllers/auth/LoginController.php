<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Students;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

  public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $email = $request->email;
    $password = $request->password;

    // Check Admin
    $admin = Admin::where('admin_email', $email)->first();
    if ($admin && Hash::check($password, $admin->admin_password)) {
        Auth::guard('admin')->login($admin);
        session(['user_role' => 'admin']);
        return redirect()->route('admin.dashboard');
    }

    // Check Student
    $student = Students::where('student_email', $email)->first();
    if ($student && Hash::check($password, $student->student_password)) {
        Auth::guard('student')->login($student);
        session(['user_role' => 'student']); 
        return redirect()->route('student.dashboard');
    }

    return back()->withErrors(['email' => 'Invalid credentials']);
}
    public function logout()
    {
        Auth::guard('admin')->logout();
        Auth::guard('student')->logout();
        return redirect('/login');
    }
}
