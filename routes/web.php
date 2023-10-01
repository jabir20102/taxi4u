<?php

use App\Http\Controllers\TaxiController;
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
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/services', function () {
    return view('frontend.services');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});


//   Taxi 
Route::get('admin/taxis', [TaxiController::class, 'index'])->name('taxis.index');
Route::get('admin/taxis/create', [TaxiController::class, 'create'])->name('taxis.create');
Route::post('admin/taxis/store', [TaxiController::class, 'store'])->name('taxis.store');
// taxi booking
Route::get('admin/taxi/booking', [TaxiController::class, 'booking'])->name('taxi.booking');

