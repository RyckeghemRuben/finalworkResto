<?php

namespace App\Http\Controllers;


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
}
