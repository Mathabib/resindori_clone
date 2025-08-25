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
    return view('index');
})->name('home');

Route::get('/about', function() {
    return view('sections.about_us');
})->name('about');

Route::get('/services', function() {
    return view('sections.services');
})->name('services');

Route::get('/operations', function() {
    return view('sections.operations');
})->name('operations');

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
Route::get('/test', function() {
    return view('test');
});



