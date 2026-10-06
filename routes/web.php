<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('erp')->group(function () {

    Route::get('/', function () {
        return view('erp.index');
    })->name('erp.index');

    Route::get('/login', function () {
        return view('erp.login');
    })->name('erp.login');

});
