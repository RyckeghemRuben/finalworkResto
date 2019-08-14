@extends('layouts.adminmenu')

@section('content')
    <hr>
<a href="{{route('admin.createDrank')}}" role="button" class="btn btn-outline-danger">Create Drank</a>
    <hr>
    <form>
        <input type="text" name="search" id="search" class="form-control" placeholder="search"><br>
    </form>
    <div class="container">
        @if($gezochteDrank != null)
        @foreach($gezochteDrank as $gezocht)
            <div class="row" style="font-family: Steelfish; margin-bottom: 0.5em">
                <div class="col-8" style="padding-left: 0;">
                    <h4>{{$gezocht->drankNaam}}</h4>
                </div>
                <a class="col-2 btn btn-outline-info btn-xs"  href="{{route('editDrankPagina',['id'=>$gezocht->id])}}" role="button">Edit</a>
                <a class="col-2 btn btn-outline-danger btn-xs" href="{{route('drankDelete',['id'=>$gezocht->id])}}" role="button">X</a>
            </div>
        @endforeach
        @endif
    <hr>
    </div>
@endsection