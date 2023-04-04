<header class="p-3 text-white fixed-top shadow" style="background-color: #FEFBF6; font-family: @font-face;">
    <div class="container">
        <div class="container-fluid d-flex justify-content-between align-items-center w-100">
            <ul class="nav">
                <li>
                    <a href="/adminpage" class="nav-link fs-3 fw-bolder">
                        <img src="{{asset('image/group-3.png')}}" height="60" alt="booky">
                    </a>
                </li>
            </ul>
            <div class="text-end">
                @guest
                <div class="container-fluid;">
                    <a href="{{ route('login') }}" class="btn text-white" style="background-color: #433b36; ">Login</a>
                    <a href="{{ route('register') }}" class="btn text-white" style="background-color: #433b36; ">Register</a>
                   
                </div>
                @else
                <div>
                    <a href="/my-profile" class="btn"><i class="fa-solid fa-user" style="color: #433b36;"></i> {{ Auth::user()->username }}</a>
                    <a href="#"><i class="fa-solid fa-grip-lines-vertical" style="color: #433b36;"></i></a>
                    <a href="{{ route('logout')}}" class="btn" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket" style="color: #433b36;"></i> Log Out</a>


                </div>
                {{-- <div class="dropdown">
                    <a class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><img class="rounded-circle" src="">
                      
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/my-profile">My Profile</a></li>
                        <li><a class="dropdown-item" href="#">My Favorite</a></li>
                        <li><a href="{{ route('logout')}}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Log Out</a></li>
                    </ul>
                </div> --}}
                @endguest
                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</header>