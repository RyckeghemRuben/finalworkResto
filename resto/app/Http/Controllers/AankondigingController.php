<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aankondiging;

class AankondigingController extends Controller
{
public function getAankondigingIndex(Request $request){
    $naam = $request->input('search');
    $gezochteAankondigingen = Aankondiging::orderBy('naam','asc')
        ->where('naam','LIKE', '%'.$naam.'%')
        ->get();
    return view('admin.adminAankondigingen',['gezochteAankondigingen'=> $gezochteAankondigingen]);
}


    public function postCreateAankondiging(Request $request){

        $this->validate($request,[
            'naam' => 'required',
            'tekst' => 'required'
        ]);

        $aankondigingetje = new Aankondiging([
            'naam' => $request->input('naam'),
            'tekst' => $request->input('tekst')
        ]);

        $aankondigingetje->save();

        return redirect()->route('aankondigingIndex');
    }

    public function postUpdateAankondiging(Request $request){
        $this->validate($request,[
            'naam' => 'required',
            'tekst' => 'required'
        ]);

        //haal aan te passen item op uit database
        $aankondigingetje = Aankondiging::find($request->input('id'));

        //pas waarden aan
        $aankondigingetje->naam =$request->input('naam');
        $aankondigingetje->tekst=$request->input('tekst');

        $aankondigingetje->save();

        return redirect()->route('aankondigingIndex');
    }
}
