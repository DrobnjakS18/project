@section('side')


    <div class="row">

        <!-- Leva strana -->
        <div class="col-lg-3">

            <h1 class="my-4">Shop Name</h1>
            <div class="list-group">
                @foreach($niz as $red)
                <a href="/muske_patike/{{{$red->id}}}" class="list-group-item">{{$red->naziv}}</a>
                @endforeach
                {{--<a href="#" class="list-group-item">Category 2</a>--}}
                {{--<a href="#" class="list-group-item">Category 3</a>--}}
            </div>

            <div class="login-form my-4">

                <h2>Login forma</h2>

                <form action="{{route('login')}}" method="POST">
                    <div class="form-group">
                        <label> Korisničko ime: </label>
                        <input type="text" id="korisnickoIme" name="tbKorisnickoIme" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label> Lozinka: </label>
                        <input type="password" id="lozinka" name="tbLozinka" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="login" name="btnLogin" class="btn btn-default"/>
                    </div>
                </form>
                {{--{{$login->korisnicko_ime}}--}}
            </div>

        </div>
        <!--// Leva strana -->
    </div>