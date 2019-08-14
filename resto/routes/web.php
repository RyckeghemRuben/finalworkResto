<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function (){
    return view('content.start');
});



Route::get('/index','StartController@getIndex')->name('content.index');

Route::get('/admin','StartController@getAdmin')->name('admin.index');

Route::get('/dranken','StartController@getDranken')->name('content.dranken');


Route::get('/dranken',[
    'uses'=>'StartController@getDrankIndexKlant',
    'as'=>'drankIndexKlant'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/start', function (){
    return view('content.start');
});

Route::post('/index',[
    'uses' => 'StartController@getAddStorage',
    'as' => 'addTostorage'
]);

Route::get('/adminDranken','AdminController@getAdminDranken')->name('admin.adminDranken');

Route::get('/createDrank',[
    'uses' => 'AdminController@getDrankenCreate',
    'as' =>'admin.createDrank'
]);

Route::get('/drankje',[
    'uses' => 'DrankController@getDrankIndex',
    'as' => 'drankje'
]);

Route::post('/createDrank',[
    'uses' => 'DrankController@postCreateDrank',
    'as' => 'drankCreate'
]);


Route::get('drankEdit/{id}',[
    'uses' => 'AdminController@getDrankenEdit',
    'as' => 'editDrankPagina'
]);

Route::post('/drankUpdate',[
    'uses' => 'DrankController@postUpdateDrank',
    'as' => 'drankUpdate'
]);

Route::get('drankDelete/{id}',[
    'uses' => 'AdminController@getDrankDelete',
    'as' => 'drankDelete'
    ]);

Route::get('/start',[
    'uses' => 'StartController@getStart',
    'as' => 'contentStart'
]);