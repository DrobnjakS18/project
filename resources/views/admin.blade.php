@extends('layout.template')

@section('admin')
@if(session('insert_success'))
    <div class="alert alert-success">
    {{session('insert_success')}}
    </div>
    @endif
    <div class="col-lg-9">

        <form action="{{asset('/admin')}}" method="POST">
            @csrf
            <label>Datum</label>
            <select name="datum">
                <option value="0">Izaberite</option>
                @foreach($datum as $d)
                    <option value="{{$d->id}}">{{$d->datum}}</option>
                    @endforeach
            </select><br>
            <label>Od</label>
            <select name="mesto_od">
                <option value="0">Izaberite</option>
                @foreach($mesto as $m)
                    <option value="{{$m->id}}">{{$m->naziv}}</option>
                    @endforeach
            </select><br>
            <label>Do</label>
            <select name="mesto_do">
                <option value="0">Izaberite</option>
                @foreach($mesto as $m)
                    <option value="{{$m->id}}">{{$m->naziv}}</option>
                @endforeach
            </select><br>
            <label>Polazak</label>
            <select name="polazak">
                <option value="0">Izaberite</option>
                @foreach($vreme as $v)
                    <option value="{{$v->id}}">{{$v->vreme}}</option>
                @endforeach
            </select><br>
            <label>Dolazak</label>
            <select name="dolazak">
                <option value="0">Izaberite</option>
                @foreach($vreme as $v)
                    <option value="{{$v->id}}">{{$v->vreme}}</option>
                @endforeach
            </select><br>

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
    <!--// Desna strana -->
    @endsection
