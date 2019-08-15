<?php

namespace App\Http\Controllers;

use App\Bestelling;
use App\Soort;
use function foo\func;
use Illuminate\Http\Request;
use Session;
use App\Drank;
use App\Oproep;

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

        $bierenFles = Soort::with('dranks')
            ->where('id','=',3)->get();

        $trappisten = Soort::with('dranks')
            ->where('id','=',4)->get();

        $abdijBieren = Soort::with('dranks')
            ->where('id','=',5)->get();

        $fruitBieren = Soort::with('dranks')
            ->where('id','=',6)->get();

        $apperitieven = Soort::with('dranks')
            ->where('id','=',7)->get();

        $sterkeDranken = Soort::with('dranks')
            ->where('id','=',8)->get();

        $wijnen = Soort::with('dranks')
            ->where('id','=',9)->get();

        $warmeDranken = Soort::with('dranks')
            ->where('id','=',10)->get();

        return view('content.dranken',['frisdranken'=>$frisdranken,'bierenVat'=>$bierenVat,
            'bierenFles'=>$bierenFles, 'trappisten'=>$trappisten, 'abdijBieren'=>$abdijBieren,
            'fruitBieren'=>$fruitBieren, 'apperitieven'=>$apperitieven, 'sterkeDranken'=>$sterkeDranken,
            'wijnen'=>$wijnen, 'warmeDranken'=>$warmeDranken]);
    }

    public function getKlantOproep(){
        $oproep = new Oproep();
        $oproep->tafelnummer = Session::get('tafelNummer');

        $oproep->save();

        return redirect()->route('content.index')->with('message', 'Er wordt iemand naar jouw tafel gestuurd.');
    }

}




