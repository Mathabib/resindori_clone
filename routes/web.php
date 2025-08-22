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
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});
Route::get('/services', function() {
    return view('services');
});
Route::get('/operations', function() {
    return view('operations');
});
Route::get('/clients', function() {
    return view('clients');
});
Route::get('/contacts', function() {
    return view('contacts');
});
Route::get('/portal', function() {
    return view('portal');
});
Route::get('/career', function() {
    return view('career');
});
Route::get('/about', function() {
    return view('about');
});
