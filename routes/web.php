<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
})
->name('application');

// Route::view('/{any}', 'app')->where('any', '.');


