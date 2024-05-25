<?php

use Illuminate\Support\Facades\Route;

Route::get('/perkenalan', function () {
    return view('perkenalan');
});

Route::get('/welcome', function () {
    return view('welcome');
});
