@extends('layouts.app')
@section('main')

<header style="background-color: #DFD8CA;">
    <section class="vh-100">
        <div class="col-lg-6 col-md-5 py-5 h-100 mx-auto">
            <div class="card text-center shadow" style="margin-top: 200px;">
                <div class="card-header h5 text-white" style="background-color: #433b36;">Create Your New Password!</div>
                <div class="card-body px-5">
                    @if (session('status'))
                    <div class="alert-alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
        
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" value="{{ old('email', $request->email) }}">
                            @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">New Password</label>
                            <input name="password" type="password" class="form-control" value="{{ old('password') }}">
                            @error('password')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Confirm Password</label>
                            <input name="password_confirmation" type="password" class="form-control">
                        </div>
                        <button type="submit" class="btn w-100 text-white" style="background-color: #433b36; ">Reset Password</button>
                  
                    </form>

                </div>
            </div>

        </div>

    </section>
</header>
@endsection