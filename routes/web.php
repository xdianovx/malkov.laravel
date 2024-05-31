<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usligi', function () {
    return view('services');
});


Route::get('/vrachi', function () {
    return view('doctors');
});

Route::get('/vrachi/vrach', function () {
    return view('doctor');
});

Route::get('/kontakty', function () {
    return view('contacts');
});

Route::get('/o-klinike', function () {
    return view('about');
});

Route::get('/novosti', function () {
    return view('news');
});

Route::get('/novosti/{slug}', function () {
    return view('news-single');
});

Route::get('/akcii', function () {
    return view('stock');
});

Route::get('/akcii/{slug}', function () {
    return view('news-single');
});
