<?php

use App\Mail\HyPMail;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ImageSliderController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/images', [ImageController::class, 'index'])->name('images.index');
    Route::post('/images/upload', [ImageController::class, 'upload'])->name('images.upload');
    Route::post('/images/update/{filename}', [ImageController::class, 'update'])->name('images.update');
    Route::delete('/images/{filename}', [App\Http\Controllers\ImageController::class, 'delete'])->name('images.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/images/sliders', [ImageSliderController::class, 'index'])->name('images-sliders.index');
    Route::post('/images/sliders/upload', [ImageSliderController::class, 'upload'])->name('images-sliders.upload');
    Route::post('/images/sliders/update/{filename}', [ImageSliderController::class, 'update'])->name('images-sliders.update');
    Route::delete('/images/sliders/{filename}', [App\Http\Controllers\ImageSliderController::class, 'delete'])->name('images-sliders.destroy');
});



// Route::get('/enviado', function () {
//     Mail::to('osvaldote3@gmail.com')->send(new HyPMail());

//     return 'enviado!!';
// });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

