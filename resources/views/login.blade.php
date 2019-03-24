@extends('layout.template')
@section('title')
    Login
@endsection
@section('login')

    <div class="login-form my-4">

        <h2>Login forma</h2>

        <form action="{{asset('/')}}" method="POST">
            @csrf
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
        @if(session('log_error'))
            <div class="alert alert-danger">
                {{session('log_error')}}
            </div>
        @endif
    </div>
    @endsection