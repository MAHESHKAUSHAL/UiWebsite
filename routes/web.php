<?php

use Illuminate\Support\Facades\Route;

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
/*

//demo
Route::get('/demo', function () {
    return view('demo');
});

//ROUTING

Route::get('/routing/{id}', function ($id) {
    //return $id;
    return view('routing',["id"=>$id]);
});
Route::redirect('/here','/');

//CONTROLLER
route::get("users/{id}",'Users@index');

//VIEW ERROR HAI SIR VIEW KA PAGE

//route::get('/Mobiles','mobiles');

//route::get("mobiles/{id}",'View@index');

// FORM

Route::view('/user_forms', "user_form");

Route::post(' /user_forms',"form@submit");

Route::view('/user_forms', "user_form")->middleware('agecheck');


//Route::get('db','database@dbcheck');
Route::get('db','JoinController@dbcheck');

Route::get('data','ModelController@index');
Route::get('list','Pagination_Contro@list');


Route::get('template','BladetemplateController@Index');
*/

Route::get('/', function () {
    return view('welcome');
});
route::view('/login','lg.log');
        //url    folder  html
