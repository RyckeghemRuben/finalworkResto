<?php

namespace App\Http\Controllers;


use App\Aankondiging;
use App\Drank;
use Illuminate\Http\Request;
use App\Soort;
use App\Bestelling;
use App\Oproep;
use App\Food;
use App\Foodsoort;


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
        $drankje->soorts()->detach();
        $drankje->delete();

        return redirect()->action('DrankController@getDrankIndex');
    }

    public function getKlantBestelling(){
        $bestellingen = Bestelling::all();
        $oproepen = Oproep::all();
        $bestellingen->transform(function ($bestelling){
            $bestelling->cart = unserialize($bestelling->cart);
            return $bestelling;
        });
        return view('admin.adminBestellingen',['bestellingen'=>$bestellingen,'oproepen'=>$oproepen]);
    }

    public function getBestellingDelete($id){
        $bestelling = Bestelling::find($id);
        $bestelling->delete();
        return redirect()->action('AdminController@getKlantBestelling');
    }

    public function getOproepDelete($id){
        $oproep = Oproep::find($id);
        $oproep->delete();
        return redirect()->action('AdminController@getKlantBestelling');
    }

    function getFoodCreate(){
        $foodsoorts = Foodsoort::all();
        return view('admin.createFood',['foodsoorts'=>$foodsoorts]);
    }

    function getFoodEdit($id){
        $foodje = Food::find($id);
        $foodsoorts = Foodsoort::all();

        return view('admin.editFood',[
            'foodje' => $foodje,
            'foodId'=>$id,
            'foodsoorts' => $foodsoorts
        ]);
    }

    public function getFoodDelete($id){
        $foodje = Food::find($id);
        $foodje->foodsoorts()->detach();
        $foodje->delete();

        return redirect()->action('FoodController@getFoodIndex');
    }


    function getAankondigingCreate(){
        return view('admin.createAankondiging');
    }

    function getAankondigingEdit($id){
        $aankondigingetje = Aankondiging::find($id);

        return view('admin.editAankondiging',[
            'aankondigingetje' => $aankondigingetje,
            'aankondigingId'=>$id,
        ]);
    }

}
