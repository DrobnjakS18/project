@extends('layout.template')

@section('profile')

   <p>{{$profile->ime}}</p>
   <p>{{$profile->prezime}}</p>
   <p>{{$profile->korisnicko_ime}}</p>
   <p>{{$profile->ruta_id}} <a href="{{route('del_rez',['id' => $profile->RezID])}}" class="btn btn-danger">Otkazi Rezervaciju</a></p>
    @endsection