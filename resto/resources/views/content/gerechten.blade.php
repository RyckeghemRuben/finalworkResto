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
            @if(DB::table('food_soort')->get('foodsoort_id')->where('foodsoort_id',1)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Snacks</h2>
            @endif
            @foreach($snacks as $snack)
                @foreach ($snack->foods as $soort)
                    <div class="row">
                        <div class="col-7" style="margin-top: 0.5em ">
                            {{ $soort->naam }}<br>
                        </div>
                        <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                            €{{ $soort->prijs }}
                        </div>
                        <div class="col-2" style="margin-top: 0.5em; text-align: center;">
                            <a href="{{route('product.addToFoodCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                        </div>
                    </div>
                @endforeach
            @endforeach
            @if(DB::table('food_soort')->get('foodsoort_id')->where('foodsoort_id',2)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Versnaperingen</h2>
            @endif
            @foreach($snacks as $snack)
                @foreach ($snack->foods as $soort)
                    <div class="row">
                        <div class="col-7" style="margin-top: 0.5em ">
                            {{ $soort->naam }}<br>
                        </div>
                        <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                            €{{ $soort->prijs }}
                        </div>
                        <div class="col-2" style="margin-top: 0.5em; text-align: center;">
                            <a href="{{route('product.addToFoodCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                        </div>
                    </div>
                @endforeach
            @endforeach
            @if(DB::table('food_soort')->get('foodsoort_id')->where('foodsoort_id',3)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Voorgerechten</h2>
            @endif
            @foreach($snacks as $snack)
                @foreach ($snack->foods as $soort)
                    <div class="row">
                        <div class="col-7" style="margin-top: 0.5em ">
                            {{ $soort->naam }}<br>
                        </div>
                        <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                            €{{ $soort->prijs }}
                        </div>
                        <div class="col-2" style="margin-top: 0.5em; text-align: center;">
                            <a href="{{route('product.addToFoodCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                        </div>
                    </div>
                @endforeach
            @endforeach
            @if(DB::table('food_soort')->get('foodsoort_id')->where('foodsoort_id',4)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Hoofdgerechten</h2>
            @endif
            @foreach($snacks as $snack)
                @foreach ($snack->foods as $soort)
                    <div class="row">
                        <div class="col-7" style="margin-top: 0.5em ">
                            {{ $soort->naam }}<br>
                        </div>
                        <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                            €{{ $soort->prijs }}
                        </div>
                        <div class="col-2" style="margin-top: 0.5em; text-align: center;">
                            <a href="{{route('product.addToFoodCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                        </div>
                    </div>
                @endforeach
            @endforeach
            @if(DB::table('food_soort')->get('foodsoort_id')->where('foodsoort_id',5)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Desserts</h2>
            @endif
            @foreach($snacks as $snack)
                @foreach ($snack->foods as $soort)
                    <div class="row">
                        <div class="col-7" style="margin-top: 0.5em ">
                            {{ $soort->naam }}<br>
                        </div>
                        <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                            €{{ $soort->prijs }}
                        </div>
                        <div class="col-2" style="margin-top: 0.5em; text-align: center;">
                            <a href="{{route('product.addToFoodCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                        </div>
                    </div>
                @endforeach
            @endforeach
            @if(DB::table('food_soort')->get('foodsoort_id')->where('foodsoort_id',6)->first())
                <hr>
                <h2 style="font-family: Steelfish;">Wafels/Pannenkoeken</h2>
            @endif
            @foreach($snacks as $snack)
                @foreach ($snack->foods as $soort)
                    <div class="row">
                        <div class="col-7" style="margin-top: 0.5em ">
                            {{ $soort->naam }}<br>
                        </div>
                        <div class="col-3" style="border-right: 0.5px; border-left: 0px; border-top: 0px; border-bottom: 0px; border-style: solid; border-color: #e3342f; margin-top: 0.5em">
                            €{{ $soort->prijs }}
                        </div>
                        <div class="col-2" style="margin-top: 0.5em; text-align: center;">
                            <a href="{{route('product.addToFoodCart',['id' => $soort->id])}}" style="color: #e3342f;">+</a>
                        </div>
                    </div>
                @endforeach
            @endforeach
    @endif
    <div class="row">
        <nav class="navbar fixed-bottom navbar-light bg-light">
            <div class="col">
                <a class="navbar-brand" href="{{Route('drankIndexKlant')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnDrinks.png") }}"></a>
            </div>
            <div class="col">
                <a class="navbar-brand" href="{{route('foodIndexKlant')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnFoodActive.png") }}"></a>
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