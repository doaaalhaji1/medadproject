<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/doaacommit', function () {
    return "This is the first commitment to ensure the upload process";
});