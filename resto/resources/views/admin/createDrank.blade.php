@extends('layouts.menu')

@section('content')
    <div class="container">
        <form method="post" action="{{route('drankCreate')}}">
            <div class="form-group">
                <label for = "title">Naam drank</label>
                <input type="text" class="form-control" id="drankNaam" name="drankNaam">
            </div>
            <div class="form-group">
                <label for="content">Prijs</label>
                <input type="text" class="form-control" id="drankPrijs" name="drankPrijs">
            </div>
            @csrf
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
@endsection