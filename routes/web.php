<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
});


//Client

Route::get('/', function () {
    return view('client.index');
})->name('client.index');
Route::get('/static', function () {
    return view('client.static');
});
Route::get('/faculty', function () {
    return view('client.faculty');
})->name('client.faculty');
Route::get('/economic', function () {
    return view('client.economicDeverlop');
})->name('client.economic');
Route::get('/profile', function () {
    return view('client.profile');
})->name('client.profile');
Route::get('/vision', function () {
    return view('client.vision');
})->name('client.vision');
Route::get('/organizationchart', function () {
    return view('client.organizationchart');
})->name('client.organizationchart');