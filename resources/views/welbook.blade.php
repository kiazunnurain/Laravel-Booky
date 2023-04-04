@extends('layouts.app')
@section('main')
<body style="background: #DFD8CA;">
    <header>
        <div>
            <div class="">
                <div class="p-5 text-center bg-image"
                    style="height: 100vh; background-repeat: no-repeat; background-size: cover;">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="container" style="color: #433B36;">
                            <h1 class="text-center" style="font-family: @font-face;">Hello, {{ Auth::user()->name }}!
                                <h1 class="text-center" style="font-family: @font-face;"> Welcome To
                                    <img src="{{asset('image/group-3.png')}}" class="img-fluid" style="height: 100px;">
                                </h1>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div style="">
            <div class="p-5 d-flex justify-content-center align-items-center h-100 shadow-sm"
                style="background-color: #FEFBF6;">
                <h2 class="text-center" style="color: #433B36; background-color: #FEFBF6; font-family: @font-face;">
                    Admin Page
                </h2>
            </div>
            <div class="container">
                <div class="container-fluid">
                    <div class="container-center">
                        <div class="row g-3">
                            <div class="col-md-6 my-mx-auto">
                                <div class="product-inner-box position-relative m-5">
                                    <a href="{{url('/databuku')}}" class="btn btn-white m-2 shadow-lg"
                                        style="background-color: #FEFBF6; font-family: @font-face; color: #433B36;">
                                        <img src="image/data.png" alt="databuku"
                                            class="img-fluid shadow img-thumbnail mb-3">Data Book</a>
                                </div>
                            </div>
                            <div class="col-md-6 my-mx-auto">
                                <div class="product-inner-box position-relative m-5">
                                    <a href="{{url('/dashboard')}}" class="btn btn-white m-2 shadow-lg"
                                        style="background-color: #FEFBF6; font-family: @font-face; color: #433B36;"><img
                                            src="image/buku.png" alt="buku"
                                            class="img-fluid shadow img-thumbnail mb-3">Books</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection