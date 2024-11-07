@extends('layouts.app')

@section('content')
<div class="container-fluid p-5">
    <div class="row">
        <img class="col-lg-6 " src="{{asset('imges/sign-up employee.png')}}" alt="Sign Up Image"/>
        <div class="col-lg-6 container-fluid d-flex flex-column">
            <p class="h1">Sign Up - Find a Job</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="employee-tab" data-bs-toggle="tab" href="#employee" role="tab" aria-controls="employee" aria-selected="true">Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="employer-tab" data-bs-toggle="tab" href="#employer" role="tab" aria-controls="employer" aria-selected="false">Employer</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="employee" role="tabpanel" aria-labelledby="employee-tab">
                    <!-- Employee Form -->
                    <form method="POST" action="{{ route('register.employee')}}">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="fullname" class="form-label" style="font-family: 'sansation'; font:bolder">Full Name:</label>
                            <input type="text" class="custom-input form-control" id="fullname" placeholder="Enter Full Name" name="fullname" required>
                            @error('fullname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="custom-input form-control" id="email" placeholder="Enter Your Email" name="email" required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="custom-input form-control" id="password" placeholder="Enter Your Password" name="password" required>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Your Password Again" required>
                        </div>
                        <button type="submit" class="btn border w-100">Sign Up</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="employer" role="tabpanel" aria-labelledby="employer-tab">
                    <!-- Employer Form -->
                    <form action="">
                        <div class="mb-3 mt-3">
                            <label for="companyname" class="form-label" style="font-family: 'sansation'; font:bolder">Company Name:</label>
                            <input type="text" class="form-control" id="companyname" placeholder="Enter Company Name" name="companyname">
                        </div>
                        <div class="mb-3">
                            <label for="contactemail" class="form-label">Contact Email:</label>
                            <input type="email" class="form-control" id="contactemail" placeholder="Enter Contact Email" name="contactemail">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Your Password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Confirem Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Your Password Againg" name="confirm-password">
                        </div>
                        <button type="submit" class="btn border w-100">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


