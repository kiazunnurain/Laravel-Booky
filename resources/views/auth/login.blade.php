@extends('layouts.app')
@section('main')
<header style="background-color: #DFD8CA;">
  <section class="vh-100" style="margin-top: 60px;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card shadow-lg" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-6 d-none d-md-block">
                <img src="https://i.pinimg.com/474x/fc/e0/f6/fce0f6027d2fcbbd232fddcd71873f03.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-6 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                    <form action="{{ route('login')}}" method="post">
                        @csrf
                        <div class="d-flex align-items-center mb-1">

                          <i class="fa-light fa-book-open-cover"></i><img src="{{asset('image/group-3.png')}}" height="100" alt="booky">
                         </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
  
                    <div class="form-outline mb-4">

                        <label for="email/username" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="name@example.com"/>
                      @error('email') 
                      <div class="invalid-feedback">
                          {{ $message}}
                      </div>
                      @enderror
                     
                    </div>
  
                    <div class="form-outline mb-4">

                        <label for="email" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror"
                        placeholder="password" name="password"/>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message}}
                        </div>
                        @enderror
                     
                    </div>
                    <p class="text-end"><a href="{{ route('password.request') }}"  style="color: #433b36;">Forgot password?</a></p>
                    <div class="pt-1 mb-3 d-grid">
                      <button type="submit" class="btn btn-dark btn-lg btn-block shadow" style="background-color: #433b36; ">Login</button>
                    </div>
  
                 
                    <p class="mb-3 pb-lg-2">Don't have an account? <span><a href="{{ route('register') }}" style="color: #433b36;">Register</span></a></p>

        
                  </form>

  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  
</header>
    
@endsection