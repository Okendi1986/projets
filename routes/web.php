<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\FirebaseAuthController;
//use App\Http\Controllers\FirebaseAuthController as MyFirebaseController;


Route::get('/', function () {
    return view('master');
})-> name('master');

Route::get("/about",function(){
    return view('about');
})-> name('about');

Route::get('/works', function () {
    return view('works');
})-> name('works'); ;


Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');
//Route::post('/login',[FirebaseAuthController::class,'index'])->name('login.index');
//Route::get('/login', [FirebaseAuthController::class, 'showLoginForm'])->name('login');
//Route::post('/login', [FirebaseAuthController::class, 'auth'])->name('login.post');
//Route::get('/login', [loginController::class,'authenticate']);

//Route::post('/login', [FirebaseAuthController::class,"store"]);


Route::get('/signup', function () {
    return view('signup');
})->name('signup');

//Route::resource('/signup', signupController::class, ['except' => ['store']]);
Route::post('/signup', [signupController::class,'store']);


# 1
//Route::get('/signup', [App\Http\Controllers\FirebaseAuthController::class, 'signup']);
# 2
//Route::get('/signup', 'App\Http\Controllers\FirebaseAuthController@store');
# 3
//Route::get('hello', [FirebaseAuthController::class,'signup']);
# 4
//Route::get('hello', array('uses' => 'App\Http\Controllers\HelloWorldController@sayHello'));

# Error!
//Route::get('hello', array('uses' => 'HelloWorldController@sayHello'));
//Route::get('hello', array('uses' => 'HelloWorldController::class@sayHello'));

//Route::post('/signup', [signupController::class, 'store']);
//Route::resource('users', 'App\Http\Controllers\UserController');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



