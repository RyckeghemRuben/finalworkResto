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

//drankroutes

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


Route::get('/addToCart/{id}',[
    'uses'=>'ProductController@getAddToCart',
    'as'=>'product.addToCart'
]);

Route::get('/addToFoodCart/{id}',[
    'uses'=>'ProductController@getAddToFoodCart',
    'as'=>'product.addToFoodCart'
]);

Route::get('/addToBestelCart/{id}',[
    'uses'=>'ProductController@getAddToBestelCart',
    'as'=>'product.addToBestelCart'
]);

//routes ivm bestelllingen

Route::get('/bestelling',[
    'uses'=>'ProductController@getBestelling',
    'as'=>'product.bestelling'
]);

Route::get('/verminderMetEén/{id}',[
    'uses'=>'ProductController@getVerminderMetEén',
    'as'=>'verminderMetEén'
]);
Route::get('/vermeerderMetEén/{id}',[
    'uses'=>'ProductController@getVermeerderMetEén',
    'as'=>'vermeerderMetEén'
]);

Route::get('/verwijderItem/{id}',[
    'uses'=>'ProductController@getVerwijderItem',
    'as' => 'verwijderItem'
]);

Route::get('/besteld',[
    'uses' => 'ProductController@getMaakBestelling',
    'as' => 'maakBestelling'
]);
Route::get('/klantenBestellingen',[
    'uses'=>'AdminController@getKlantBestelling',
    'as'=>'admin.klantBestelling'
]);

Route::get('bestellingDelete/{id}',[
    'uses' => 'AdminController@getBestellingDelete',
    'as' => 'bestellingDelete'
]);

//routes oproepen
Route::get('/klantOproep',[
    'uses' => 'StartController@getKlantOproep',
    'as' => 'klantOproep'
]);
Route::get('oproepDelete/{id}',[
    'uses' => 'AdminController@getOproepDelete',
    'as' => 'oproepDelete'
]);

//foodRoutes

Route::get('/eten',[
    'uses' => 'FoodController@getFoodIndex',
    'as' => 'adminEten',
]);

Route::post('/adminCreateFood',[
    'uses' => 'FoodController@postCreateFood',
    'as' => 'foodCreate'
]);

Route::get('/createFood',[
    'uses' => 'AdminController@getFoodCreate',
    'as' =>'admin.createFood'
]);

Route::get('foodEdit/{id}',[
    'uses' => 'AdminController@getFoodEdit',
    'as' => 'editFoodPagina'
]);

Route::post('/foodUpdate',[
    'uses' => 'FoodController@postUpdateFood',
    'as' => 'foodUpdate'
]);

Route::get('foodDelete/{id}',[
    'uses' => 'AdminController@getFoodDelete',
    'as' => 'foodDelete'
]);


Route::get('/klanteten',[
    'uses'=>'StartController@getFoodIndexKlant',
    'as'=>'foodIndexKlant'
]);

//aankondiging routes

Route::get('/aankondigingen',[
    'uses' => 'AankondigingController@getAankondigingIndex',
    'as' => 'aankondigingIndex'
]);

Route::get('/createAankondiging',[
    'uses' => 'AdminController@getAankondigingCreate',
    'as' =>'admin.createAankondiging'
]);

Route::post('/adminCreateAankondiging',[
    'uses' => 'AankondigingController@postCreateAankondiging',
    'as' => 'aankondigingCreate'
]);
Route::get('/klantaankondigingen',[
    'uses'=>'StartController@getAankondigingIndexKlant',
    'as'=>'AankondigingIndexKlant'
]);

Route::get('aankondigingEdit/{id}',[
    'uses' => 'AdminController@getAankondigingEdit',
    'as' => 'editAankondigingPagina'
]);

Route::post('/aankondigingUpdate',[
    'uses' => 'AankondigingController@postUpdateAankondiging',
    'as' => 'aankondigingUpdate'
]);
