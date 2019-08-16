@extends('layouts.adminmenu')

@section('content')
    <div class="container">
        @include('partials.errors')
        <form method="post" action="{{route('drankUpdate')}}" style="margin-top: 1em;">
            <div class="form-group">
                <label for = "title">Naam drank</label>
                <input type="text" class="form-control" id="naam" name="naam" value="{{$drankje->naam}}">
            </div>
            <div class="form-group">
                <label for="content">Prijs</label>
                <input type="text" class="form-control" id="prijs" name="prijs" value="{{$drankje->prijs}}">
            </div>
            @foreach($soorts as $soort)

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="soorts[]"
                               value="{{$soort->id}}"
                                {{$drankje->soorts->contains($soort->id) ? 'checked' : ''}}>
                        {{$soort->name}}
                    </label>
                </div>
            @endforeach
            <input type="hidden" name="id" value="{{$drankje->id}}">
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