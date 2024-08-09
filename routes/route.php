<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function(){
    return Inertia::render('Main', [                
    ]);
});
Route::get('/a', function(){
    return view('test::home');
});