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

//Route untuk geometry
Route::get('/', function() {
    return view('geometrys.index');
});
Route::group(['prefix' => 'geometri'], function() {
    Route::get('/', function() {
        return view('geometrys.index');
    });
    Route::get('/persegi', function() {
        return view('geometrys.pages.persegi');
    });
    Route::get('/persegipanjang', function() {
        return view('geometrys.pages.persegipanjang');
    });
    Route::get('/segitiga', function() {
        return view('geometrys.pages.segitiga');
    });
    Route::get('/jajargenjang', function() {
        return view('geometrys.pages.jajargenjang');
    });
    Route::get('/belahketupat', function() {
        return view('geometrys.pages.belahketupat');
    });
    Route::get('/kubus', function() {
        return view('geometrys.pages.kubus');
    });
    Route::get('/balok', function() {
        return view('geometrys.pages.balok');
    });
    Route::get('/prisma', function() {
        return view('geometrys.pages.prisma');
    });
});
