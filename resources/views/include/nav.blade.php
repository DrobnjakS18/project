@section("nav")

    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @if(session('user'))

                <li class="nav-item">
                    <a class="nav-link" href="{{route('profile',['id' => session('user')->id_korisnik])}}">Profile</a>
                </li>
                        @if(session('user')->naziv == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('/admin')}}">Admin panel</a>
                        </li>
                            @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{route('session_del')}}">Odjava</a>
                </li>
                    @else
                    <li class="nav-item ">
                        <a class="nav-link" href="{{asset('/home')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('/reg')}}">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('/')}}">Log in</a>
                    </li>
                    @endif
            </ul>
        </div>
    </div>
