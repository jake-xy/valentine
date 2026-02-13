<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('invitation');
})->name('invitation');

Route::get('/our-date', function () {
    return view('date-plan');
})->name('date.plan');