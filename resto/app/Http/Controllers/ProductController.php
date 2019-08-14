<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drank;
use App\Cart;
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
}
