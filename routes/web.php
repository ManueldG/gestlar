<?php

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PostController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('admin')->middleware(['auth','verified'])->group(function(){

    Route::resource('post',PostController::class);

});

Auth::routes();


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {

    $request->fulfill();

    return redirect('/');

})->middleware(['auth', 'signed'])->name('verification.verify');


Route::get('/email/verify/', function () {

    return view('auth.verify');

})->name('verification.notice');


Route::post('/email/resend/', [EmailVerificationNotificationController::class,'store'])->name('verification.resend');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
