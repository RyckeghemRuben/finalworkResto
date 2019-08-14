@extends('layouts.menu')

@section('content')

    @foreach($frisdranken as $frisdrank)
        @foreach ($frisdrank->dranks as $soort)
            {{ $soort->drankNaam }}<br>
        @endforeach
    @endforeach

    @foreach($bierenVat as $bierVat)
        @foreach ($bierVat->dranks as $soort)
            {{ $soort->drankNaam }}<br>
        @endforeach
    @endforeach
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