@extends('layouts.menu')

@section('content')

    @if(Session::has('cart'))
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge-danger">{{$product['qty']}}</span>
                            <strong>{{$product['item']['drankNaam']}}</strong>
                            <span class="label label-succes">{{$product['drankPrijs']}}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <strong>Totaal: {{$totalPrice}}</strong>
            </div>
        </div>
    @else
    <b>Nog geen bestelling gemaakt</b>
    @endif

@endsection