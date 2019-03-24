@extends('layout.template')
@section('title')
    Pocetna
    @endsection
@section('sadrzaj')

    <div class="col-lg-9">

        <div class="row my-4">

            <input type="date" name="datum"/>
            <select name="mesto_od">
                <option value="0">Izaberite</option>
            </select>
            <select name="mesto_do">
                <option value="0">Izaberite</option>
            </select>


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

        </div>

    </div>
    <!--// Desna strana -->

    </div>
@endsection
