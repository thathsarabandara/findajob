<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeRegisterController extends Controller
{
    public function showRegistrationForm(){
        return view('auth.register');
    }
    public function register(Request $request)
    {
        // Validate the input
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees',
            'password' => 'required|string|confirmed|min:8'
        ]);
    
        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Create the employee record
        $employee = Employee::create([
            'full_name' => $request->input('fullname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
    
        // Redirect to login page
        return redirect()->route('login');
    }
    
}
