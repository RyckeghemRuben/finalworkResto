<?php

namespace App\Http\Controllers;


use App\Drank;
use Illuminate\Http\Request;
use App\Soort;


class AdminController extends Controller
{
    function getAdminDranken(){
        return view('admin.adminDranken');
    }
    function getDrankenCreate(){
        $soorts = Soort::all();
        return view('admin.createDrank',['soorts'=>$soorts]);
    }

    function getDrankenEdit($id){
        $drankje = Drank::find($id);
        $soorts = Soort::all();

        return view('admin.editDrank',[
            'drankje' => $drankje,
            'drankId'=>$id,
            'soorts' => $soorts
        ]);
    }
    public function getDrankDelete($id){
        $drankje = Drank::find($id);
        $drankje->soorts()->delete();
        $drankje->delete();

        return redirect()->action('DrankController@getDrankIndex');
    }

}
