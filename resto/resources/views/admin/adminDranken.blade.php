@extends('layouts.menu')

@section('content')
    <hr>
<a href="{{route('admin.createDrank')}}" role="button" class="btn btn-outline-danger">Create Drank</a>
    <hr>
    <form>
        <input type="text" name="search" id="search" class="form-control" placeholder="search">
    </form>
        @foreach($gezochteDrank as $gezocht)
        <h5>{{$gezocht->drankNaam}}</h5>
        @endforeach
    <div class="container">
    @foreach($drankjes as $drankje)
        <div class="row" style="margin-top: 1em;">
            <h4 class="col-8" style="font-family: Steelfish">{{$drankje->drankNaam}}</h4>
            <a class="col-2 btn btn-outline-info btn-xs" href="{{route('editDrankPagina',['id'=>$drankje->id])}}" role="button">Edit</a>
            <a class="col-2 btn btn-outline-danger btn-xs" href="{{route('drankDelete',['id'=>$drankje->id])}}" role="button">X</a>
        </div>
    @endforeach
    {{$drankjes->links()}}
    </div>
@endsection