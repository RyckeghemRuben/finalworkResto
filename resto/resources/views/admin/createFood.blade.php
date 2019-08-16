@extends('layouts.adminmenu')

@section('content')
    <div class="container">
        @include('partials.errors')
        <form method="post" action="{{route('foodCreate')}}" style="margin-top: 1em;">
            <div class="form-group">
                <label for = "title">Naam Food</label>
                <input type="text" class="form-control" id="naam" name="naam">
            </div>
            <div class="form-group">
                <label for="content">Prijs</label>
                <input type="text" class="form-control" id="prijs" name="prijs">
            </div>
            @foreach($foodsoorts as $foodsoort)
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="soorts[]"
                               value="{{$foodsoort->id}}">
                        {{$foodsoort->name}}
                    </label>
                </div>

            @endforeach


            @csrf
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
@endsection