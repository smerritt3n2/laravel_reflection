@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Main Control Room') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome back Admin!') }}
                    @if (Route::has('login'))
                    @auth
                        <!--======== If "Admin" is Logged in, display the following web-pages ========-->
                        @if(Auth::user()->name == "admin") 
                        <div class="panelContainer">
                            <button class="contentContainer" onclick="window.location='{{ url("/companyForm") }}'">Company Form</button>
                            <button class="contentContainer" onclick="window.location='{{ url("/employeeForm") }}'">Employee Form</button>
                            <button class="contentContainer" onclick="window.location='{{ url("/companyList") }}'">Company List</button>
                            <button class="contentContainer" onclick="window.location='{{ url("/employeeList") }}'">Employee List</button>
                            <button class="contentContainer" onclick="window.location='{{ url("/gallery") }}'">Image Gallery</button>
                            <button class="contentContainer" onclick="window.location='{{ route("register") }}'">Register</button>
                        </div>
                        @endif
                        <!--==========================================================================-->
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                        @if (Route::has('register'))
                            
                        @endif
                    @endif
            @endif
                </div>
            </div>
        </div>
    </div>
</div>
<link href="{{ asset('css/customeStyle.css') }}" rel="stylesheet" />
@endsection
