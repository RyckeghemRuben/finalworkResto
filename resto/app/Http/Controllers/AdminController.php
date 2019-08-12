<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getAdminDranken(){
        return view('admin.adminDranken');
    }
    function getDrankenCreate(){
        return view('admin.createDrank');
    }
}
