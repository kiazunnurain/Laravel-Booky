@extends('layouts.app')
@section('main')
<header style="background-color: #DFD8CA;">
    <section class="vh-100">
        <div class="col-lg-6 col-md-5 py-5 h-100 mx-auto">
            <div class="card text-center shadow" style="margin-top: 200px;">
                <div class="card-header h5 text-white" style="background-color: #433b36;">Password Reset</div>
                <div class="card-body px-5">
                    @if (session('status'))
                    <div class="alert-alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <p class="card-text py-2">
                            Enter your email address and we'll send you an email with instructions to reset your
                            password.
                        </p>
                        <div class="form-outline mb-3">
                            <label for="email" value="{{ __('Email') }}"></label>
                            <input name="email" id="email" type="email" class="form-control" value="{{ old('email') }}"
                                placeholder="Email Input">
                            @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        
                            <button type="submit" class="btn w-100 text-white" style="background-color: #433b36; ">Send Reset Link</button>
                        <div class="d-flex justify-content-between mt-4">
                            <a class="btn text-white" style="background-color: #433b36;"
                                href="{{ route('login') }}">Login</a>
                            <a class="btn text-white" style="background-color: #433b36;"
                                href="{{ route('register') }}">Register</a>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </section>
</header>


    @endsection