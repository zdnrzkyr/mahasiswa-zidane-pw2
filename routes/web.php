<?php

use Illuminate\Support\Facades\Route;

Route::resource('/mahasiswas', \App\Http\Controllers\MahasiswaController::class);

Route::get('/', function () {
    return view('welcome');
});
