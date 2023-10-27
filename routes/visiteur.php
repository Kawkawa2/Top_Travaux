<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiteurController;
use App\Mail\ContactArtisan;

/*
|--------------------------------------------------------------------------
| visiteur Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('Visiteur', VisiteurController::class);

Route::get('/home', [VisiteurController::class, 'index'])->name('index');
Route::get('/search', [VisiteurController::class, 'Search'])->name('search');
Route::get('/profile/{id}', [VisiteurController::class, 'showProfile'])->name('profile');
Route::post('/comments/{id}', [VisiteurController::class, 'store'])->name('Visiteur.store');
Route::post('/mail/{id}', [VisiteurController::class, 'mailing'])->name('Visiteur.mailing');
Route::post('/subscribe', [VisiteurController::class, 'subscribe'])->name('Visiteur.subscribe');
Route::get('/404', [VisiteurController::class, 'notFoundPage'])->name('Visiteur.notFoundPage');
