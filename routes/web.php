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
Route::get('/allfaculty', function () {
    return view('client.allfaculty');
})->name('client.allfaculty');
Route::get('/administrativeandpersionnel', function () {
    return view('client.administrativeandpersionnel');
})->name('client.administrativeandpersionnel');
Route::get('/researchanddevelopment', function () {
    return view('client.researchanddevelopment');
})->name('client.researchanddevelopment');
Route::get('/researchprofile', function () {
    return view('client.researchprofile');
})->name('client.researchprofile');
Route::get('/recentproject', function () {
    return view('client.recentproject');
})->name('client.recentproject');
Route::get('/industriallink', function () {
    return view('client.industriallink');
})->name('client.industriallink');
Route::get('/library', function () {
    return view('client.library');
})->name('client.library');
Route::get('/partner', function () {
    return view('client.partner');
})->name('client.partner');
Route::get('/journal', function () {
    return view('client.journal');
})->name('client.journal');
Route::get('/contact', function () {
    return view('client.contact');
})->name('client.contact');
Route::get('/subinternal', function () {
    return view('client.subinternal');
})->name('client.subinternal');
Route::get('/subinternational', function () {
    return view('client.subinternational');
})->name('client.subinternational');
Route::get('/association', function () {
    return view('client.association');
})->name('client.association');

Route::get('/bachelor', function () {
    return view('client.bachelor');
})->name('client.bachelor');

Route::get('/master', function () {
    return view('client.master');
})->name('client.master');

Route::get('/phd', function () {
    return view('client.phd');
})->name('client.phd');

Route::get('/foundation', function () {
    return view('client.foundation');
})->name('client.foundation');

Route::get('/assessment', function () {
    return view('client.assessment');
})->name('client.assessment');

Route::get('/gradingsystem', function () {
    return view('client.gradingsystem');
})->name('client.gradingsystem');

Route::get('/curriculum', function () {
    return view('client.curriculum');
})->name('client.curriculum');