<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\temanjoki;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teman', [temanjoki::class, 'index'])->name('temanjomok');