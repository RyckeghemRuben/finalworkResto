@extends('layouts.menu')

@section('content')
    <hr>
<a href="{{route('admin.createDrank')}}" role="button" class="btn btn-outline-danger">Create Drank</a>
    <hr>
    @foreach($drankjes as $drankje)
        <div class="row" style="margin-top: 1em;">
            <h4 class="col-8" style="font-family: Steelfish">{{$drankje->drankNaam}}</h4>
            <a class="col-2 btn btn-outline-info btn-xs" href="{{route('editDrankPagina',['id'=>$drankje->id])}}" role="button">Edit</a>
            <a class="col-2 btn btn-outline-danger btn-xs" href="#" role="button">Delete</a>
        </div>
    @endforeach
    {{$drankjes->links()}}
@endsection