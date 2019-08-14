@extends('layouts.menu')

@section('content')
<div class="container" style="margin-bottom: 5em">
    <div class="row" style="margin-top: 1em">
        <div class="col-10"></div>
        <div class="col-2" style="text-align: center">
            <img style="width: 100%;" src="{{ URL::asset("/images/cart.png") }}">
            <span class="badge-danger" style="padding: 0.2em">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
        </div>
    </div>
    <h2 style="font-family: Steelfish;">Frisdranken</h2>
    @foreach($frisdranken as $frisdrank)
        @foreach ($frisdrank->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->drankNaam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->drankPrijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em; text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
    <hr>
    <h2 style="font-family: Steelfish;">Bieren op vat</h2>
    @foreach($bierenVat as $bierVat)
        @foreach ($bierVat->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->drankNaam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->drankPrijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em; text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
    <hr>
    <h2 style="font-family: Steelfish;">Bieren op fles</h2>
    @foreach($bierenFles as $bierFles)
        @foreach ($bierFles->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->drankNaam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->drankPrijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
    <hr>
    <h2 style="font-family: Steelfish;">Trappisten</h2>
    @foreach($trappisten as $trappist)
        @foreach ($trappist->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->drankNaam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->drankPrijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
    <hr>
    <h2 style="font-family: Steelfish;">Abdijbieren</h2>
    @foreach($abdijBieren as $abdijBier)
        @foreach ($abdijBier->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->drankNaam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->drankPrijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
    <hr>
    <h2 style="font-family: Steelfish;">Fruitbieren</h2>
    @foreach($fruitBieren as $fruitBier)
        @foreach ($fruitBier->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->drankNaam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->drankPrijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
    <hr>
    <h2 style="font-family: Steelfish;">Apperitieven</h2>
    @foreach($apperitieven as $apperitief)
        @foreach ($apperitief->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->drankNaam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->drankPrijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
    <hr>
    <h2 style="font-family: Steelfish;">Wijnen</h2>
    @foreach($wijnen as $wijn)
        @foreach ($wijn->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->drankNaam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->drankPrijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
    <hr>
    <h2 style="font-family: Steelfish;">Sterke Dranken</h2>
    @foreach($sterkeDranken as $sterkeDrank)
        @foreach ($sterkeDrank->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->drankNaam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->drankPrijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
    <hr>
</div>
    <div class="row">
        <nav class="navbar fixed-bottom navbar-light bg-light">
            <div class="col">
                <a style="width: 100%" class="navbar-brand" href="{{Route('drankIndexKlant')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnDrinksActive.png") }}"></a>
            </div>
            <div class="col">
                <a style="width: 100%" class="navbar-brand" href="#"><img style="width: 100%;" src="{{ URL::asset("/images/btnFood.png") }}"></a>
            </div>
            <div class="col">
                <a style="width: 100%" class="navbar-brand" href="#"><img style="width: 100%;" src="{{ URL::asset("/images/btnBell.png") }}"></a>
            </div>
            <div class="col">
                <a style="width: 100%" class="navbar-brand" href="#"><img style="width: 100%;" src="{{ URL::asset("/images/btnHistory.png") }}"></a>
            </div>
            <div class="col">
                <a style="width: 100%" class="navbar-brand" href="#"><img style="width: 100%;" src="{{ URL::asset("/images/btnBill.png") }}"></a>
            </div>
        </nav>
    </div>
@endsection