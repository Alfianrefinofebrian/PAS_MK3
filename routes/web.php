<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/pktpalette', function () {
    return view('pktpalette');
});

Route::get('/findcolor', function () {
    return view('findcolor');
});

