<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Employer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;  // Correctly import Request
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function checkValidation(Request $request)
    {
        if ($request->input('role') == 'employee') {
            $email = $request->input('email');
            $password = $request->input('password');
            
            // Find the employee by email
            $employee = Employee::where('email', $email)->first();
    
            // Check if employee exists and password is correct
            if ($employee && Hash::check($password, $employee->password)) {
                
                return redirect()->route('home');
            } else {
                return redirect()->back()->withErrors(['message' => 'Invalid credentials.']);
            }
        } elseif ($request->input('role') == 'employer') {
            $email = $request->input('email');
            $password = $request->input('password');
            
            // Find the employer by email
            $employer = Employer::where('email', $email)->first();
    
            // Check if employer exists and password is correct
            if ($employer && Hash::check($password, $employer->password)) {
                return redirect()->route('home');
            } else {
                return redirect()->back()->withErrors(['message' => 'Invalid credentials.']);
            }
        } else {
            return redirect()->back()->withErrors(['message' => 'Invalid role selected.']);
        }
    }
}
