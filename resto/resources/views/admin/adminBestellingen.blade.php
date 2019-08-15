@extends('layouts.adminmenu')
@section('content')
 <div class="container">
     <div class="row" style="margin-top: 1em; font-family: Steelfish;">
         <div class="col-lg-10"><h1>Bestellingen</h1></div>
     </div>
     <div class="row">
         <div class="col-12">
             @foreach($bestellingen as $bestelling)
             <div class="card" style="margin-top: 1em;">
                 <div class="card-body">
                     <div class="row">
                         <div class="col-9">
                         <h2 class="card-title" style="font-family: Steelfish">Tafelnummer: {{$bestelling->tafelnummer}}</h2>
                         </div>
                         <div class="col-3">
                             <a href="{{route('bestellingDelete',['id'=>$bestelling->id])}}" class="btn btn-outline-danger">X</a>
                         </div>
                     </div>
                     <hr style="border-color: #e3342f;">
                     @foreach($bestelling->cart->items as $item)
                            <p>
                                <b>{{$item['item']['drankNaam']}}</b> | X <b>{{$item['qty']}}</b>

                                  | € {{$item['drankPrijs']}}
                            </p>
                         @endforeach
                 </div>
                 <div class="card-footer">
                     <h5 class="card-title" style="margin: 0;">Totaalprijs: € {{$bestelling->cart->totalPrice}}</h5>
                 </div>
             </div>
             @endforeach
         </div>
     </div>
 </div>
@endsection