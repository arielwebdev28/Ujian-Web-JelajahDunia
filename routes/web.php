<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

route::get('client',function(){
    return view('client');
});

route::get('dashboard',function(){
    return view('dashboard');
});

require __DIR__.'/settings.php';
