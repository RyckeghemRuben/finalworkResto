<?php

namespace App\Http\Controllers;
use App\Drank;
use App\Soort;

use Illuminate\Http\Request;

class DrankController extends Controller
{
    public function getDrankIndex(){
        $drankjes = Drank::orderBy('created_at','asc')->paginate(5);
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



        //tags opslaan
        $drankje->soorts()->sync(
            $request->input('soorts')===null ? '' : $request->input('soorts'));
        return redirect()->route('drankje');
    }

}
