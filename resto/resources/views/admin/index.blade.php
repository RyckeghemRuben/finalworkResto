
@extends('layouts.adminmenu')

@section('content')
    <div class="row" style="margin-top: 1em;">
        <div class="col-2">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                <img  width="100%" src="{{URL::asset("/images/logoutSmall.png")}}">
            </a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>

    </div>
    <div class="card" style="margin-top: 1.5em">
        <div class="card-header bg-danger" style="color: white;">
            Bestellingen
        </div>
        <div class="card-body">
            <h5 class="card-title bg">Bestellingen van de klanten komen op de volgende pagina</h5>
            <a href="{{route('admin.klantBestelling')}}" class="btn btn-outline-danger">Volgende</a>
        </div>
    </div>
    <div class="card" style="margin-top: 1.5em">
        <div class="card-header bg-danger" style="color: white;">
            Dranken
        </div>
        <div class="card-body">
            <h5 class="card-title bg">Creëer/update/verwijder dranken</h5>
            <a href="{{route('drankje')}}" class="btn btn-outline-danger">Volgende</a>
        </div>
    </div>
    <div class="card" style="margin-top: 1.5em">
        <div class="card-header bg-danger" style="color: white;">
            Gerechten
        </div>
        <div class="card-body">
            <h5 class="card-title bg">Creëer/update/verwijder gerechten</h5>
            <a href="{{route('adminEten')}}" class="btn btn-outline-danger">Volgende</a>
        </div>
    </div>
    <div class="card" style="margin-top: 1.5em">
        <div class="card-header bg-danger" style="color: white;">
            Andere
        </div>
        <div class="card-body">
            <h5 class="card-title bg">Creëer/update/verwijder andere</h5>
            <a href="#" class="btn btn-outline-danger">Volgende</a>
        </div>
    </div>
@endsection