<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
class FoodController extends Controller
{

    public function getFoodIndex(Request $request){
        $naam = $request->input('search');
        $gezochteFoods = Food::orderBy('naam','asc')
            ->where('naam','LIKE', '%'.$naam.'%')
            ->get();
        return view('admin.adminFood',['gezochteFoods'=> $gezochteFoods]);
    }

    public function postCreateFood(Request $request){

        $this->validate($request,[
            'naam' => 'required',
            'prijs' => 'required|numeric',
            'soorts'=>'required'
        ]);

        $foodje = new Food([
            'naam' => $request->input('naam'),
            'prijs' => $request->input('prijs')
        ]);

        $foodje->save();

        //tags opslaan
        $foodje->foodsoorts()->sync(
            $request->input('soorts')===null ? '' : $request->input('soorts'));
        return redirect()->route('adminEten');
    }

    public function postUpdateFood(Request $request){
        $this->validate($request,[
            'naam' => 'required',
            'prijs' => 'required|numeric',
            'soorts'=>'required'
        ]);

        //haal aan te passen item op uit database
        $foodje = Food::find($request->input('id'));

        //pas waarden aan
        $foodje->naam =$request->input('naam');
        $foodje->prijs=$request->input('prijs');

        $foodje->save();


        //tags opslaan
        $foodje->foodsoorts()->sync(
            $request->input('soorts')===null ? '' : $request->input('soorts'));

        return redirect()->route('adminEten');
    }


}
