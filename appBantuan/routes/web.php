<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.master');
});

Route::get('/', Function(){
    return view('home');
});

Route::get('/penduduk', Function(){
    return view('penduduk.penduduk');
})-> name('datapenduduk');

Route::get('/sembako', Function(){
    return view('sembako.sembako');
})-> name('datasembako');

Route::get('/tunai', Function(){
    return view('tunai.tunai');
})-> name('datablt');

Route::get('/rumah', Function(){
    return view('rumah.rumah');
})-> name('bedahrumah');

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





