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

Route::get('/operations', function() {
    return view('sections.operations');
})->name('operations');

Route::get('/clients', function() {
    return view('sections.clients');
})->name('clients');

Route::get('/contacts', function() {
    return view('sections.contacts');
})->name('contacts');

Route::get('/portal', function() {
    return view('portal');
});

Route::get('/career', function() {
    return view('career');
});

Route::get('/test', function() {
    return view('test');
});

// =================== SERVICES ===================
Route::get('/service0', function() {
    return view('sections.services.service0');
})->name('service0');

Route::get('/service1', function() {
    return view('sections.services.service1');
})->name('service1');

Route::get('/service2', function() {
    return view('sections.services.service2');
})->name('service2');

Route::get('/service3', function() {
    return view('sections.services.service3');
})->name('service3');

Route::get('/service4', function() {
    return view('sections.services.service4');
})->name('service4');

Route::get('/service5', function() {
    return view('sections.services.service5');
})->name('service5');

Route::get('/service6', function() {
    return view('sections.services.service6');
})->name('service6');

Route::get('/service7', function() {
    return view('sections.services.service7');
})->name('service7');

Route::get('/service8', function() {
    return view('sections.services.service8');
})->name('service8');

Route::get('/service9', function() {
    return view('sections.services.service9');
})->name('service9');

Route::get('/service10', function() {
    return view('sections.services.service10');
})->name('service10');

Route::get('/service11', function() {
    return view('sections.services.service11');
})->name('service11');

Route::get('/service12', function() {
    return view('sections.services.service12');
})->name('service12');

Route::get('/service13', function() {
    return view('sections.services.service13');
})->name('service13');

