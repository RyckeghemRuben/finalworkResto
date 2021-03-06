@extends('layouts.adminmenu')

@section('content')
    <div class="container">
        @include('partials.errors')
        <form method="post" action="{{route('aankondigingUpdate')}}" style="margin-top: 1em;">
            <div class="form-group">
                <label for = "title">Naam aankondiging</label>
                <input type="text" class="form-control" id="naam" name="naam" value="{{$aankondigingetje->naam}}">
            </div>
            <div class="form-group">
                <label for="content">Tekst</label>
                <input type="textarea" class="form-control" id="tekst" name="tekst" value="{{$aankondigingetje->tekst}}">
            </div>
            <input type="hidden" name="id" value="{{$aankondigingetje->id}}">
            @csrf
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
        <hr>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-outline-danger" href="{{url()->previous()}}">Terug</a>
            </div>
        </div>
    </div>
@endsection