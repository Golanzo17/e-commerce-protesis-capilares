<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tienda', function () {
    return view('tienda');
});

Route::get('/kit-premium', function () {
    return view('kit-premium');
});

Route::get('/colocacion', function () {
    return view('colocacion');
});

Route::get('/capacitaciones', function () {
    return view('capacitaciones');
});
