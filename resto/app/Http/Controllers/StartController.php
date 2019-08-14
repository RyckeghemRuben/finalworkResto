<?php

namespace App\Http\Controllers;

use App\Soort;
use function foo\func;
use Illuminate\Http\Request;
use Session;
use App\Drank;

class StartController extends Controller
{

    public function getStart()
    {
        return view('content.start');
    }

    public function getAdmin()
    {
        return view('admin.index');
    }


    public function getDranken()
    {
        return view('content.dranken');
    }

    public function getAddStorage(Request $request){

        $this->validate($request,[
            'tafelNummer' => 'required',
        ]);
        $request->session()->flush();
        $request->session()->put('tafelNummer',$request->input('tafelNummer'));
        return redirect()->route('content.index');


    }

    public function getIndex(){
        return view('content.index');
    }
    public function getDrankIndexKlant(){
        $frisdranken = Soort::with('dranks')
        ->where('id','=',1)->get();

        $bierenVat = Soort::with('dranks')
            ->where('id','=',2)->get();
        return view('content.dranken',['frisdranken'=>$frisdranken,'bierenVat'=>$bierenVat]);
    }

}




