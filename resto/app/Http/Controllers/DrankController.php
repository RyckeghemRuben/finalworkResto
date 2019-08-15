<?php

namespace App\Http\Controllers;
use App\Drank;
use App\Soort;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DrankController extends Controller
{
    public function getDrankIndex(Request $request){
        $naam = $request->input('search');
        $gezochteDrank = Drank::orderBy('naam','asc')
            ->where('naam','LIKE', '%'.$naam.'%')
            ->get();
        return view('admin.adminDranken',['gezochteDrank'=> $gezochteDrank]);
    }

    public function postCreateDrank(Request $request){

        $this->validate($request,[
            'naam' => 'required',
            'prijs' => 'required|numeric'
        ]);

        $drankje = new Drank([
            'naam' => $request->input('naam'),
            'prijs' => $request->input('prijs')
        ]);

        $drankje->save();



        //tags opslaan
        $drankje->soorts()->sync(
            $request->input('soorts')===null ? '' : $request->input('soorts'));
        return redirect()->route('drankje');
    }

    public function postUpdateDrank(Request $request){
        $this->validate($request,[
            'naam' => 'required',
            'prijs' => 'required|numeric',
            'soorts'=>'required'
        ]);

        //haal aan te passen item op uit database
        $drankje = Drank::find($request->input('id'));

        //pas waarden aan
        $drankje->naam =$request->input('naam');
        $drankje->prijs=$request->input('prijs');

        $drankje->save();


        //tags opslaan
        $drankje->soorts()->sync(
            $request->input('soorts')===null ? '' : $request->input('soorts'));

        return redirect()->route('drankje');
    }

}
