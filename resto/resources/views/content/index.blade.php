
@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top: 1.5em">
        <div class="col-4" style="padding: 0 0 0 2em;">
            <a class="bottomBtn" href="{{Route('content.dranken')}}"><img src="{{ URL::asset("/images/drinks.png") }}" style="width: 100%;"></a>
        </div>
        <div class="col-4">
            <img style="width: 100%;" src="{{ URL::asset("/images/food.png") }}">
        </div>
        <div class="col-4" style="padding-left: 0; padding-right: 2em;">
            <img style="width: 100%;" src="{{ URL::asset("/images/bell.png") }}">
        </div>
    </div>
    <div class="row" style="margin-top: 0.3em">
        <div class="col-4" style="padding: 0 0 0 2em;">
            <img style="width: 100%;" src="{{ URL::asset("/images/history.png") }}">
        </div>
        <div class="col-4">
            <img style="width: 100%;" src="{{ URL::asset("/images/bill.png") }}">
        </div>
    </div>
    {{print_r(session()->get('tafelNummer'), true)}}
@endsection