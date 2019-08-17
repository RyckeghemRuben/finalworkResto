
@extends('layouts.master')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success" style="margin-top: 1em;">
            {{ session()->get('message') }}
        </div>
    @endif
    @if(Session::has('tafelNummer'))
    <div class="row" style="margin-top: 1.5em">
        <div class="col-4" style="padding: 0 0 0 2em;">
            <a class="bottomBtn" href="{{Route('drankIndexKlant')}}"><img src="{{ URL::asset("/images/drinks.png") }}" style="width: 100%;"></a>
        </div>
        <div class="col-4">
            <a class="bottomBtn" href="{{Route('foodIndexKlant')}}"><img src="{{ URL::asset("/images/food.png") }}" style="width: 100%;"></a>
        </div>
        <div class="col-4" style="padding-left: 0; padding-right: 2em;">
            <a href="{{Route('klantOproep')}}">
            <img style="width: 100%;" src="{{ URL::asset("/images/bell.png") }}">
            </a>
        </div>
    </div>
    <div class="row" style="margin-top: 0.3em">
        <div class="col-4" style="padding: 0 0 0 2em;">
            <a href="{{Route('AankondigingIndexKlant')}}">
            <img style="width: 100%;" src="{{ URL::asset("/images/announcement.png") }}">
            </a>
        </div>
        <div class="col-4">
            <a href="{{route('product.bestelling')}}">
            <img style="width: 100%;" src="{{ URL::asset("/images/bill.png") }}">
            </a>
        </div>
        <div class="col-4" style="padding-left: 0; padding-right: 2em;">
           <a href="{{Route('contentStart')}}"><img style="width: 100%;" src="{{ URL::asset("/images/logOut.png") }}"></a>
        </div>
    </div>
    {{print_r(session()->get('tafelNummer'), true)}}
    @endif
@endsection