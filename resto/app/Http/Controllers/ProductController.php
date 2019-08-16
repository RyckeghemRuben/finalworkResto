<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drank;
use App\Cart;
use App\Bestelling;
use Session;
use App\Food;


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

    public function getAddToFoodCart(Request $request,$id){
        $food = Food::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($food,$food->id);

        $request->session()->put('cart',$cart);
        return redirect()->route('foodIndexKlant');
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
    public function getVermeerderMetEén($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->vermeerderMetEén($id);

        Session::put('cart',$cart);
        return redirect()->route('product.bestelling');
    }

    public function getVerwijderItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->verwijderItem($id);

        Session::put('cart',$cart);
        return redirect()->route('product.bestelling');

    }
}
