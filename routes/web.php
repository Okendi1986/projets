<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\loginController;

// Route pour la page principale 'master'
Route::get('/', function () {
    return view('master');
})->name('master');

// Route pour la page 'about'
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route pour la page 'Trouver une voiture'
Route::get('/works', function () {
    return view('works');
})->name('works');

// Route::get('/works', [VehicleController::class, 'index'])->name('works');

// Routes pour les services
// Route::get('/services', function () {
//     return view('services');
// })->name('services');

// Sous-services pour la section 'Services'
Route::get('/services/web', function () {
    return view('services.web');
})->name('service.web');

Route::get('/services/mobile', function () {
    return view('services.mobile');
})->name('service.mobile');

Route::get('/services/consulting', function () {
    return view('services.consulting');
})->name('service.consulting');

// Route pour la page 'contact'
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');

// Routes pour l'authentification
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/authenticate', [loginController::class, 'authenticate'])->name('authenticate');
//Routes pour l'inscription
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/signup', [signupController::class, 'store']);

// Dashboard protégé par middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::get('/send-test-email', function () {
//     Mail::to('leonelyapi30@gmail.com')->send(new \App\Mail\ContactFormMail([
//         'name' => 'Test User',
//         'email' => 'leonely699@gmail.com',
//         'message' => 'Ceci est un test.'
//     ]));

//     return 'Email envoyé';
// });


