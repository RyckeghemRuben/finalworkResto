@extends('layouts.adminmenu')

@section('content')
    <div class="container">
        @include('partials.errors')
        <form method="post" action="{{route('drankCreate')}}" style="margin-top: 1em;">
            <div class="form-group">
                <label for = "title">Naam drank</label>
                <input type="text" class="form-control" id="drankNaam" name="drankNaam">
            </div>
            <div class="form-group">
                <label for="content">Prijs</label>
                <input type="text" class="form-control" id="drankPrijs" name="drankPrijs">
            </div>
            @foreach($soorts as $soort)

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="soorts[]"
                               value="{{$soort->id}}">
                        {{$soort->name}}
                    </label>
                </div>

            @endforeach


            @csrf
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
@endsection