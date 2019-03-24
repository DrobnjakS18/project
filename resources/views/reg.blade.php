@extends('layout.template')

@section('reg')
    <div class="login-form my-4">

        <h2>Registracija forma</h2>

        <form action="{{asset('/reg')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Ime: </label>
                <input type="text" id="korisnickoIme" name="tbIme" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Prezime: </label>
                <input type="text" id="korisnickoIme" name="tbPrezime" class="form-control"/>
            </div>
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    @endsection