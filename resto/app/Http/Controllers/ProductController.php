<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drank;
use App\Cart;
use App\Bestelling;
use Session;


class ProductController extends Controller
{
    public function getAddToCart(Request $request,$id){
        $drank = Drank::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($drank,$drank->id);

        $request->session()->put('cart',$cart);
        return redirect()->route('drankIndexKlant');
    }

    public function getBestelling(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('content.bestelling',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }

    public function getMaakBestelling(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $bestelling = new Bestelling();
        $bestelling->cart = serialize($cart);
        $bestelling->tafelnummer = Session::get('tafelNummer');

        $bestelling->save();
        Session::forget('cart');
        return redirect()->route('content.index')->with('message', 'Bestelling gemaakt');
    }

    public function getVerminderMetEén($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->verminderMetEén($id);

        Session::put('cart',$cart);
        return redirect()->route('product.bestelling');
    }
}
