@extends('layout.template')
@section('title')
    Pocetna
    @endsection
@section('sadrzaj')
    @if(session('rez_uspeh'))
        <div class="alert alert-success">
            {{session('rez_uspeh')}}
        </div>
    @endif
    @if(session('del_rez'))
        <div class="alert alert-success">
            {{session('del_rez')}}
        </div>
    @endif
    <div class="col-lg-9">

        <div class="row my-4">
            Datum
            <select name="datum" id="datum" onchange="datumFilter()" >
                @foreach($datum as $d)
                    <option value="{{$d->id}}">{{$d->datum}}</option>
                    @endforeach
            </select>
            Mesto
            <select name="mesto">
                @foreach($mesto as $m)
                    <option value="{{$m->id}}">{{$m->naziv}}</option>
                @endforeach
            </select>


        </div>
        <div id="sve">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Datum</th>
                <th scope="col">Polazak</th>
                <th scope="col">Dolazak</th>
                <th scope="col">Od</th>
                <th scope="col">Do</th>
                <th scope="col">Rezervacija</th>
            </tr>
            </thead>

            <tbody>
            @foreach($sve_rute as $ruta)
            <tr>
                <th scope="row">{{$ruta->datum}}</th>
                <td>{{$ruta->naziv}}</td>
                <td>{{$ruta->naziv}}</td>
                <td>{{$ruta->vreme}}</td>
                <td>{{$ruta->vreme}}</td>
                @if(session('user'))
                <td><a href="{{route('rez',['id' => $ruta->ROUTE,'id_kor' => session('user')->id_korisnik])}}" class="btn btn-info" >Rezervisi</a></td>
                @endif
            </tr>
            @endforeach
            </tbody>


        </table>
        </div>
        <div id="filter" style="display: none;">
        </div>

    </div>
    <!--// Desna strana -->

    </div>
@endsection

@section('script')
    @parent
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">


       function datumFilter() {

           var id = $('#datum').val();


           $.ajax({

               type:'get',
               url:'/datum_filter/'+id,
               dataType:'json',
               success:function (data) {

                   var ispis = '';


                   ispis += "  <table class=\"table\">\n" +
                       "            <thead>\n" +
                       "            <tr>\n" +
                       "                <th scope=\"col\">Datum</th>\n" +
                       "                <th scope=\"col\">Polazak</th>\n" +
                       "                <th scope=\"col\">Dolazak</th>\n" +
                       "                <th scope=\"col\">Od</th>\n" +
                       "                <th scope=\"col\">Do</th>\n" +
                       "                <th scope=\"col\">Rezervacija</th>\n" +
                       "            </tr>\n" +
                       "            </thead>\n" +
                       "            \n" +
                       "            <tbody>\n";
                   for (var i in data) {
                       ispis += "  <tr>\n" +
                           "                <th scope=\"row\">" + data[i].datum + "</th>\n" +
                           "                <td>" + data[i].naziv + "</td>\n" +
                           "                <td>" + data[i].naziv + "</td>\n" +
                           "                <td>" + data[i].vreme + "</td>\n" +
                           "                <td>" + data[i].vreme + "</td>\n" +
                           "                @if(session('user'))\n" +
                           "                <td><a href=\"\" class=\"btn btn-info\" >Rezervisi</a></td>\n" +
                           "                @endif\n" +
                           "            </tr>";

                   }
                   ispis += "            </tbody>\n" +
                       "          \n" +
                       "            \n" +
                       "        </table>";


                   $('#sve').hide();
                   $('#filter').html(ispis);
                   $('#filter').show();


               }
           });
       }



    </script>
    @endsection
