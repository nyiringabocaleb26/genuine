<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PositionController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//registration
Route::get('/adminRegister', [AdminController::class,'index'])->name('register');
Route::post('/adminRegister', [AdminController::class,'store'])->name('signup');

//login
Route::get('/login', [AdminController::class,'showLogin'])->name('login');
Route::post('/login', [AdminController::class,'login'])->name('Login');
//dashboard
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//position
Route::get('/position',[PositionController::class,'index'])->name('position');
Route::post('/position',[PositionController::class,'store'])->name('position.store');

Route::get('/poslist',[PositionController::class,'getPositions'])->name('position.list');
//Logout
Route::get('/logout', [AdminController::class,'logout'])->name('logout');

Route::get('/generate-pdf', [PdfController::class, 'generatePdf'])->name('pdf');