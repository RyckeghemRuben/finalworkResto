@extends('layouts.menu')

@section('content')
    <hr>
<a href="{{route('admin.createDrank')}}" role="button" class="btn btn-outline-danger">Create Drank</a>
    @foreach($drankjes as $drankje)
        <div class="row" style="margin-top: 1em;">
            <h4 class="col-8" style="font-family: Steelfish">{{$drankje->drankNaam}}</h4>
        </div>
    @endforeach
@endsection