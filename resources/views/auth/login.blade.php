@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="m-4">
                <p class="h1 text-center">Login - Find a job</p>
                @if ($errors->has('message'))
                    <div class="alert alert-danger">
                        {{ $errors->first('message') }}
                    </div>
                @endif
                <form method="post" action="{{ route('checkme') }}">
                    @csrf  <!-- Add CSRF Token -->
                    <div class="mt-3 mb-3">
                        <label for="email"  class="form-label" style="font-family: 'sansation'; font-weight: bold;">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Contact Email" name="email" required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="password"  class="form-label" style="font-family: 'sansation'; font-weight: bold;">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mt-3 mb-3 d-flex">
                        <div class="d-flex align-items-center justify-content-between mx-3">
                            <input type="radio" id="employee" name="role" value="employee">
                            <label for="employee" class="form-label  ms-2" style="font-family: 'sansation'; font-weight: bold;">
                                I am an Employee
                            </label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mx-3">
                            <input type="radio" id="employer" name="role" value="employer">
                            <label for="employer" class="form-label ms-2" style="font-family: 'sansation'; font-weight: bold;">
                                I am an Employer
                            </label>
                        </div>
                    </div>
                    <p class="ms-3">Are you not registered? <a href="/register">Click here</a></p>
                    <button type="submit" class="btn border w-100">Log in</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <img class="mx-2 w-100 m-4 mx-5" src="{{ asset('imges/login page.png') }}" alt="login page image"/>
        </div>
    </div>
</div>

@endsection
