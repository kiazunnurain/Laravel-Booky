@extends('layouts.app')
@section('main')

<section style="background-color: #DFD8CA;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-20">
        <div class="card" style="border-radius: 1rem; margin-top: 150px;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://i.pinimg.com/474x/fc/e0/f6/fce0f6027d2fcbbd232fddcd71873f03.jpg" alt="register form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 890px;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="{{ route('register')}}" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="d-flex align-items-center mb-1">

                    <i class="fa-light fa-book-open-cover"></i><img src="{{asset('image/group-3.png')}}" height="100" alt="booky">
                   </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create your account to sign in</h5>

                  <div class="form-outline mb-4">
                    <label for="email" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name"
                      name="name" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message}}
                    </div>
                    @enderror
                  </div>

                  <div class="form-outline mb-4">

                    <label for="email" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                      id="exampleInputEmail1" placeholder="Insert a unique username" name="username"
                      value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message}}
                    </div>
                    @enderror
                  </div>
                  
                  <div class="form-outline mb-4">

                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email"
                      class="form-control @error('email') is-invalid @enderror"
                      value="{{ old('email') }}" placeholder="name@example.com" />
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message}}
                    </div>
                    @enderror

                  </div>
                  <div class="form-outline mb-4">

                    <label for="email" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                      placeholder="password" name="password">
                    @error('password')
                    <div class="invalid-feedback">
                      {{ $message}}
                    </div>
                    @enderror

                  </div>
                  <div class="form-outline mb-4">

                    <label for="password" class="col-md-4 col-form-label">Password Confirmation</label>
                    <input type="password" class="form-control" placeholder="Password Confirmation"
                      name="password_confirmation">

                  </div>
                
                  <div class="pt-1 mb-3 d-grid">
                    <button type="submit" class="btn btn-dark btn-lg btn-block" type="button" style="background-color: #433b36;">Register</button>
                  </div>

                  <p class="mb-3 pb-lg-2">Already have an account? <span><a
                        href="{{ route('login') }}"  style="color: #433b36;">Login</span></a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection