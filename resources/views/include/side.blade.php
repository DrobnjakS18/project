@section('side')


    <div class="row">

        <!-- Leva strana -->
        <div class="col-lg-3">
            @if(session('user'))
            <h1 class="my-4">Shop Name</h1>

            <div class="list-group">
                @foreach($niz as $red)
                <a href="/muske_patike/{{{$red->id}}}" class="list-group-item">{{$red->naziv}}</a>
                @endforeach
                {{--<a href="#" class="list-group-item">Category 2</a>--}}
                {{--<a href="#" class="list-group-item">Category 3</a>--}}
            </div>
                @endif



        </div>
        <!--// Leva strana -->
    </div>