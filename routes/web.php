<?php

use Illuminate\Support\Facades\Route;

##########################################################################
//Q1
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

##########################################################################
//Q2
use App\Http\Controllers\loginController;
Route::get("/loginUser", [loginController::class, "login"]);
Route::get("/loginUser/{id}", [loginController::class, "login"]);
Route::get("/loginUser/{id}/{pass}", [loginController::class, "login"]);


##########################################################################
//Q3
use App\Http\Controllers\DBcontroller;
Route::get('/customer', [DBcontroller::class, 'showUser']);
Route::view('/insert', 'customer');
Route::post('/inserted', [DBcontroller::class, 'insert']);
Route::post('/searchName', [DBcontroller::class, 'searchName']);

##########################################################################

// Route::get('/', function () {
//     return view('welcome');
// });
