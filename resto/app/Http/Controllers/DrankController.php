<?php

namespace App\Http\Controllers;
use App\Drank;

use Illuminate\Http\Request;

class DrankController extends Controller
{
    public function getDrankIndex(){
        $drankjes = Drank::orderBy('created_at','asc')->get();
        return view('admin.adminDranken',['drankjes' => $drankjes]);
    }

    public function postCreateDrank(Request $request){

        $this->validate($request,[
            'drankNaam' => 'required',
            'drankPrijs' => 'required'
        ]);

        $drankje = new Drank([
            'drankNaam' => $request->input('drankNaam'),
            'drankPrijs' => $request->input('drankPrijs')
        ]);

        $drankje->save();
        return redirect()->route('drankje');
    }

}
