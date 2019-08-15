@extends('layouts.menu')

@section('content')

    @if(Session::has('cart'))
        <div class="row" style="margin-top: 1em;">
            <div class="col-lg-12" style="font-family: Steelfish;">
                <h2>Bestelling</h2>
            </div>
            <div class="col-lg-12" style="font-family: Steelfish;">
                <h4>Tafelnummer: {{Session::get('tafelNummer')}}</h4>
            </div>
            <div class="col-lg-12">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge-danger" style="padding: 0.2em; border-radius: 10px;">{{$product['qty']}}</span>
                            <strong>{{$product['item']['naam']}}:</strong>
                            <span class="label label-succes">€{{$product['prijs']}}</span>
                            <button class="btn btn-outline-danger">-</button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row" style="margin-top: 0.5em;">
            <div class="col-lg-12">
                <strong>Totaal: €{{$totalPrice}}</strong>
            </div>
            <hr>
            <div class="col-lg-12">
                <a href="{{route('maakBestelling')}}" class="btn btn-danger" style="color: white">Bestellen</a>
            </div>
        </div>
    @else
    <div class="row" style="margin-top: 1em">
        <div class="col-lg-12">
            <div class="card" style="text-align: center">
                <h1 style="font-family: Steelfish">Nog geen bestellingen</h1>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <nav class="navbar fixed-bottom navbar-light bg-light">
            <div class="col">
                <a style="width: 100%" class="navbar-brand" href="{{Route('drankIndexKlant')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnDrinks.png") }}"></a>
            </div>
            <div class="col">
                <a style="width: 100%" class="navbar-brand" href="#"><img style="width: 100%;" src="{{ URL::asset("/images/btnFood.png") }}"></a>
            </div>
            <div class="col">
                <a style="width: 100%" class="navbar-brand" href="{{route('klantOproep')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnBell.png") }}"></a>
            </div>
            <div class="col">
                <a style="width: 100%" class="navbar-brand" href="#"><img style="width: 100%;" src="{{ URL::asset("/images/btnHistory.png") }}"></a>
            </div>
            <div class="col">
                <a style="width: 100%" class="navbar-brand" href="#"><img style="width: 100%;" src="{{ URL::asset("/images/btnBillActive.png") }}"></a>
            </div>
        </nav>
    </div>

@endsection