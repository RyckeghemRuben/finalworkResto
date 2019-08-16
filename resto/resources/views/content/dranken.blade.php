@extends('layouts.menu')

@section('content')
<div class="container" style="margin-bottom: 5em">
    <div class="row" style="margin-top: 1em">
        <div class="col-10"></div>
        <div class="col-2" style="text-align: center">
            <a href="{{route('product.bestelling')}}">
            <img class="cart" src="{{ URL::asset("/images/cart.png") }}">
                @if(Session::has('cart'))
            <span class="badge-danger" style="padding: 0.2em; border-radius: 10px;">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                    @endif
            </a>
        </div>
    </div>
    @if(Session::has('tafelNummer'))

        @if(DB::table('drank_soort')->get('soort_id')->where('soort_id',1)->first())
         <hr>
        <h2 style="font-family: Steelfish;">Frisdranken</h2>
        @endif
    @foreach($frisdranken as $frisdrank)
        @foreach ($frisdrank->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->naam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->prijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em; text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
    @if(DB::table('drank_soort')->get('soort_id')->where('soort_id',2)->first())
        <hr>
         <h2 style="font-family: Steelfish;">Bieren op vat</h2>
    @endif
    @foreach($bierenVat as $bierVat)
        @foreach ($bierVat->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->naam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->prijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em; text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
            @if(DB::table('drank_soort')->get('soort_id')->where('soort_id',3)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Bieren op Fles</h2>
            @endif
    @foreach($bierenFles as $bierFles)
        @foreach ($bierFles->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->naam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->prijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
            @if(DB::table('drank_soort')->get('soort_id')->where('soort_id',4)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Trappisten</h2>
            @endif
    @foreach($trappisten as $trappist)
        @foreach ($trappist->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->naam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->prijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
            @if(DB::table('drank_soort')->get('soort_id')->where('soort_id',5)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Abdijbieren</h2>
            @endif
    @foreach($abdijBieren as $abdijBier)
        @foreach ($abdijBier->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->naam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->prijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
            @if(DB::table('drank_soort')->get('soort_id')->where('soort_id',6)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Fruitbieren</h2>
            @endif
    @foreach($fruitBieren as $fruitBier)
        @foreach ($fruitBier->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->naam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->prijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
            @if(DB::table('drank_soort')->get('soort_id')->where('soort_id',7)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Apperitieven</h2>
            @endif
    @foreach($apperitieven as $apperitief)
        @foreach ($apperitief->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->naam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->prijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
            @if(DB::table('drank_soort')->get('soort_id')->where('soort_id',8)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Wijnen</h2>
            @endif
    @foreach($wijnen as $wijn)
        @foreach ($wijn->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->naam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->prijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
            @if(DB::table('drank_soort')->get('soort_id')->where('soort_id',9)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Sterke Dranken</h2>
            @endif
    @foreach($sterkeDranken as $sterkeDrank)
        @foreach ($sterkeDrank->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->naam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->prijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
            @if(DB::table('drank_soort')->get('soort_id')->where('soort_id',10)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Warme Dranken</h2>
            @endif
    @foreach($warmeDranken as $warmeDrank)
        @foreach ($warmeDrank->dranks as $soort)
            <div class="row">
                <div class="col-7" style="margin-top: 0.5em ">
                    {{ $soort->naam }}<br>
                </div>
                <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                    €{{ $soort->prijs }}
                </div>
                <div class="col-2" style="margin-top: 0.5em;  text-align: center;">
                    <a href="{{route('product.addToCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                </div>
            </div>
        @endforeach
    @endforeach
</div>
@endif
<div class="row">
    <nav class="navbar fixed-bottom navbar-light bg-light">
        <div class="col">
            <a class="navbar-brand" href="{{Route('drankIndexKlant')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnDrinksActive.png") }}"></a>
        </div>
        <div class="col">
            <a class="navbar-brand" href="{{Route('foodIndexKlant')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnFood.png") }}"></a>
        </div>
        <div class="col">
            <a  class="navbar-brand" href="{{route('klantOproep')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnBell.png") }}"></a>
        </div>
        <div class="col">
            <a  class="navbar-brand" href="#"><img style="width: 100%;" src="{{ URL::asset("/images/btnHistory.png") }}"></a>
        </div>
        <div class="col">
            <a class="navbar-brand" href="{{route('product.bestelling')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnBill.png") }}"></a>
        </div>
    </nav>
</div>
@endsection