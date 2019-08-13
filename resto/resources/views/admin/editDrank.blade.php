@extends('layouts.menu')

@section('content')
    <div class="container">
        <form method="post" action="{{route('drankUpdate')}}">
            <div class="form-group">
                <label for = "title">Naam drank</label>
                <input type="text" class="form-control" id="drankNaam" name="drankNaam" value="{{$drankje->drankNaam}}">
            </div>
            <div class="form-group">
                <label for="content">Prijs</label>
                <input type="text" class="form-control" id="drankPrijs" name="drankPrijs" value="{{$drankje->drankPrijs}}">
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
    </div>
@endsection