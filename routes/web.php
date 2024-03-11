<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HoroController;
use App\Http\Controllers\MatchingController;
use App\Http\Controllers\DashaController;
use App\Http\Controllers\PanchangController;
use App\Http\Controllers\ExtendedHoroController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('horoscope',[HoroController::class,'view']);

Route::get('matching',[MatchingController::class,'view']);
Route::get('dasha',[DashaController::class,'view']);
Route::get('panchang',[PanchangController::class,'view']);
Route::get('extendedhoro',[ExtendedHoroController::class,'view']);
Route::get('pdf',[PdfController::class,'view']);
Route::get('getdata',[AppointmentController::class,'view']);

Route::view('contact','contact');

Route::post('appointmentdata',[AppointmentController::class,'store'])->name('appointment');

Route::view('home','index');

Route::view('about','about');


Route::view('service','service');

Route::view('zodiac','zodiac');

// Route::view('zodiac_single','zodiac_single');

Route::view('zodiac_2','zodiac_2');
