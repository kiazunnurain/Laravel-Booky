@extends('layouts.app')
@section('main')
<header style="background-color: #DFD8CA;">
    <section class="vh-100">
        <div class="col-lg-6 col-md-5 py-5 h-100 mx-auto">
            <div class="card text-center" style="margin-top: 200px;">
                <div class="card-header h5 text-white" style="background-color: #433b36;">{{ Auth::user()->name }}</div>
                <div class="card-body px-5">
                    @if (session('status'))
                    <div class="alert-alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="" method="POST">
                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center">
                                                    <img src="https://i.pinimg.com/474x/ed/cb/dc/edcbdcc8b334052ad5204dd526a0f293.jpg" alt="Admin"
                                                    class="rounded-circle p-1" style="background: #433b36;" width="110">
                                                       
                                                    <div class="mt-3">
                                                        <p class="text-secondary mb-1">@ {{ Auth::user()->username }}</p>
                                                        <p class="text-muted font-size-sm">{{ Auth::user()->email }}</p>
                                                        <a href="/adminpage"class="btn text-white" style="background-color: #433b36;">Back</a>
                                                        <a href="/edit-profile" class="btn"  style="background-color: #DFD8CA; color: #433b36;">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    </form>

                </div>
            </div>

        </div>

    </section>
   
</header>

@endsection
