<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
class FoodController extends Controller
{

    public function getFoodIndex(Request $request){
        $naam = $request->input('search');
        $gezochteFood = Food::orderBy('naam','asc')
            ->where('naam','LIKE', '%'.$naam.'%')
            ->get();
        return view('admin.adminFood',['gezochteFood'=> $gezochteFood]);
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
}
