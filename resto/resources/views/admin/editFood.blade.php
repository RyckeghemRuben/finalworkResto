@extends('layouts.adminmenu')

@section('content')
    <div class="container">
        @include('partials.errors')
        <form method="post" action="{{route('foodUpdate')}}" style="margin-top: 1em;">
            <div class="form-group">
                <label for = "title">Naam Food</label>
                <input type="text" class="form-control" id="naam" name="naam" value="{{$foodje->naam}}">
            </div>
            <div class="form-group">
                <label for="content">Prijs</label>
                <input type="text" class="form-control" id="prijs" name="prijs" value="{{$foodje->prijs}}">
            </div>
            @foreach($foodsoorts as $foodsoort)
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="soorts[]"
                               value="{{$foodsoort->id}}"
                                {{$foodje->foodsoorts->contains($foodsoort->id) ? 'checked' : ''}}>
                        {{$foodsoort->name}}
                    </label>
                </div>
            @endforeach
            <input type="hidden" name="id" value="{{$foodje->id}}">
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