<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('master');
})-> name('master');

Route::get('/about',function(){
    return view('about');
})-> name('about');

Route::get('/works', function () {
    return view('works');
})->name('works');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');
