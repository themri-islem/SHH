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
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/reset', function () {
    return view('reset');
});

Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/butt', function () {
    return view('butt');
});
Route::get('/eq', function () {
    return view('equipement');
});
