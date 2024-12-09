<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorPaletteController;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', [ColorPaletteController::class, 'index']);

