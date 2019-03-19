@extends('layout.template')
@section('title')
    Pocetna
    @endsection
@section('sadrzaj')
    <div class="col-lg-9">

        <div class="row my-4">

            @foreach($podaci as $pro)
            <!-- Proizvod -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="images/img01.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{$pro->naziv}}</a>
                        </h4>
                        <h5>{{$pro->cena}}</h5>
                        <p class="card-text">{{$pro->opis}}</p>
                        <input type="hidden" id="id" name="id" value="{{$pro->id_proizvod}}"/>
                    </div>
                </div>
            </div>
            <!--// Proizvod -->
            @endforeach


        </div>

    </div>
    <!--// Desna strana -->

    </div>
@endsection
