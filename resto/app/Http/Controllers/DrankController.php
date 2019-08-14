<?php

namespace App\Http\Controllers;
use App\Drank;
use App\Soort;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DrankController extends Controller
{
    public function getDrankIndex(Request $request){
        $drankNaam = $request->input('search');
        $gezochteDrank = Drank::orderBy('drankNaam','asc')
            ->where('drankNaam','LIKE', '%'.$drankNaam.'%')
            ->get();
        return view('admin.adminDranken',['gezochteDrank'=> $gezochteDrank]);
    }

    public function postCreateDrank(Request $request){

        $this->validate($request,[
            'drankNaam' => 'required',
            'drankPrijs' => 'required|numeric'
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

    public function postUpdateDrank(Request $request){
        $this->validate($request,[
            'drankNaam' => 'required',
            'drankPrijs' => 'required|numeric'
        ]);

        //haal aan te passen item op uit database
        $drankje = Drank::find($request->input('id'));

        //pas waarden aan
        $drankje->drankNaam =$request->input('drankNaam');
        $drankje->drankPrijs=$request->input('drankPrijs');

        $drankje->save();


        //tags opslaan
        $drankje->soorts()->sync(
            $request->input('soorts')===null ? '' : $request->input('soorts'));

        return redirect()->route('drankje');
    }

}
