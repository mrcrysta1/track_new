<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StripePaymentController;

// Route::controller(StripePaymentController::class)->group(function(){

//     Route::get('card', 'stripe');

//     Route::post('card', 'stripePost')->name('stripe.post');

// });
// Route::controller(StripePaymentController::class)->group(function(){

//     Route::get('stripe', 'stripe');

//     Route::post('stripe', 'stripePost')->name('stripe.post');

// });


Route::get('/plan', 'App\Http\Controllers\StripeController@checkout')->name('plan');
Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/show', [App\Http\Controllers\TrackController::class, 'tracking_id_show'])->name('show');
Route::get('/recent-trackings', [App\Http\Controllers\TrackController::class, 'page_recent_tracking'])->name('recent-trackings');
Route::get('/track', [App\Http\Controllers\TrackController::class, 'track'])->name('track-form');


Route::controller(GoogleController::class)->group(function(){

    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');

    Route::get('auth/google/callback', 'handleGoogleCallback');

});

// this code sending email but not work because gmail less secure security of-------------------
// Route::get('send-mail', function () {
//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
//     \Mail::to('hafizalihassan22222@gmail.com')->send(new \App\Mail\MyTestMail($details));
//     dd("Email is Sent.");
// });

