<?php

use App\Mail\HyPMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/contact', function () {
    return view('front.contact-1');
});

Route::post('/send', [HyPMail::class, 'sendEmail'])->name('send.email');

// Route::get('/enviado', function () {
//     Mail::to('osvaldote3@gmail.com')->send(new HyPMail());

//     return 'enviado!!';
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

