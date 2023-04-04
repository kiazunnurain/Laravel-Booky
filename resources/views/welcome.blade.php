@extends('layouts.app')
@section('main')
<div>
    <div class="p-5 text-center bg-image" style="
      background-image: url('https://i.pinimg.com/564x/9a/3c/f9/9a3cf9ba3f4037ecb2219ee71f0501d6.jpg');
      height: 100vh;
      background-repeat: no-repeat;
      background-size: cover;
      ">
        <!-- <div class="mask" style="background-color: rgba(0, 0, 0, 0.8); "> -->
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <h1 class="mb-3" style="font-family: @font-face;">Hello, Welcome To
                    <img src="{{asset('image/group-1.png')}}" style="height: 100px;">
                </h1>
                <div>
                    <a class="btn btn-outline-light btn-lg" href="{{ route('register') }}" role="button">Get Started</a>
                    <a class="btn btn-lg" style="color: #433b36; background-color: #FEFBF6;" href="{{ route('login') }}" role="button">Sign in</a>
                </div>
               
            </div>
        </div>
        <div class="copyright" style="color: #F6EFE6; font-family: @font-face;">
            <p>&#169; Booky All Right Reserved</p>
        </div>
    </div>
</div>
@endsection