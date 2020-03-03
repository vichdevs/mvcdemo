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

//app()->bind('game', function(){
//    return 'Football';
//});

//dd(app());


Route::get('/', function () {
    return view('welcome');
});

Route::get('/triangle/{a}/{b}/{c}', 'TriangleCntrl@index');
Route::get('/circle/{a}', 'CircleCntrl@index');