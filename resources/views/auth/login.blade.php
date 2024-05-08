@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-pattern">
                    <div class="card-body p-4">
                        <div class="text-center w-75 m-auto">
                            <div class="auth-logo">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="GST Billing" width="150px">
                                <hr class="hr">
                                <h3>Login</h3>
                            </div>
                            <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin
                                panel.</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="emailaddress">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" name="email"
                                    value="{{ old('email') }}" required placeholder="Enter your email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" required class="form-control"
                                        placeholder="Enter your password">
                                    <div class="input-group-append" data-password="false">
                                        <div class="input-group-text">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3 text-center">
                                <button class="btn btn-primary btn-block font-weight-bold" type="submit">Log In
                                </button>
                            </div>
                            <div class="text-center">
                                <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
@endsection
