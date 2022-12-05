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

Route::get('/', function () {
    return view('pages body.welcome');
});
Route::get('/programme', function () {
    return view('pages body.programme');
});
Route::get('/biographie', function () {
    return view('pages body.biographie');
});
Route::get('/galerie', function () {
    return view('pages body.galerie');
});
Route::get('/hommage', function () {
    return view('pages body.hommage');
});
Route::get('/localisation', function () {
    return view('pages body.localisation');
});
