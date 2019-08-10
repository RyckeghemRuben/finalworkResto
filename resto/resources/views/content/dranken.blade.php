@extends('layouts.menu')

@section('content')
    <div class="row">
        <nav class="navbar fixed-bottom navbar-light bg-light">
            <div class="col">
                <a style="width: 100%" class="navbar-brand" href="{{Route('content.dranken')}}"><img style="width: 100%;" src="{{ URL::asset("/images/btnDrinksActive.png") }}"></a>
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