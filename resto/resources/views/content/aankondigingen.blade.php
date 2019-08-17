@extends('layouts.menu')

@section('content')
    <div class="container" style="margin-bottom: 5em">
        @if(Session::has('tafelNummer'))
        @foreach($aankondigingen as $aankondiging)

                <div class="card" style="margin-top: 1em;">
                    <h5 class="card-header bg-danger" style="color:white; font-family: Steelfish;">{{$aankondiging->naam}}</h5>
                    <div class="card-body">
                        <p class="card-text">{{$aankondiging->tekst}}</p>
                    </div>
                </div>
            @endforeach
    @endif
    </div>
    <div class="row">
        <nav class="navbar fixed-bottom navbar-light bg-light">
            <div class="col">
                <a class="navbar-brand" href="{{Route('drankIndexKlant')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnDrinks.png") }}"></a>
            </div>
            <div class="col">
                <a class="navbar-brand" href="{{Route('foodIndexKlant')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnFood.png") }}"></a>
            </div>
            <div class="col">
                <a  class="navbar-brand" href="{{route('klantOproep')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnBell.png") }}"></a>
            </div>
            <div class="col">
                <a  class="navbar-brand" href="{{Route('AankondigingIndexKlant')}}"><img style="width: 100%;" src="{{ URL::asset("/images/announcementSmallActive.png") }}"></a>
            </div>
            <div class="col">
                <a class="navbar-brand" href="{{route('product.bestelling')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnBill.png") }}"></a>
            </div>
        </nav>
    </div>
@endsection