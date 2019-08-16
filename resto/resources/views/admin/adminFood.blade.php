@extends('layouts.adminmenu')

@section('content')
    <hr>
    <a href="{{route('admin.createFood')}}" role="button" class="btn btn-outline-danger">Create Food</a>
    <hr>
    <form>
        <input type="text" name="search" id="search" class="form-control" placeholder="search"><br>
    </form>
    <div class="container">
        @if($gezochteFoods != null)
            @foreach($gezochteFoods as $gezochteFood)
                <div class="row" style="font-family: Steelfish; margin-bottom: 0.5em">
                    <div class="col-8" style="padding-left: 0;">
                        <h4>{{$gezochteFood->naam}}</h4>
                    </div>
                    <a class="col-2 btn btn-outline-info btn-xs"  href="{{route('editFoodPagina',['id'=>$gezochteFood->id])}}" role="button">Edit</a>
                    <a class="col-2 btn btn-outline-danger btn-xs" href="{{route('foodDelete',['id'=>$gezochteFood->id])}}" role="button">X</a>
                </div>
            @endforeach
        @endif
        <hr>
            <div class="row">
                    <a class="btn btn-outline-danger" href="{{url()->previous()}}">Terug</a>
            </div>
    </div>
@endsection