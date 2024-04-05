<?php

use Illuminate\Support\Facades\Route;
// MANUALLY ADDED CONTROLLERS
use App\Http\Controllers\CarController;
use App\Http\Controllers\Auth\LoginRegisterController;

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
// HOME PAGE.
Route::get('/', [CarController::class, 'homePageCars']);

// ALL VEHICLE LISTING PAGE.
Route::get('/used-cars', [CarController::class, 'ListingPageCarsWithTopFilter']);
Route::get('/used-cars-left-sidebar', [CarController::class, 'ListingPageCarsWithLeftSidebar']);
Route::get('/used-cars-right-sidebar', [CarController::class, 'ListingPageCarsWithRightSidebar']);

// ALL DEALER LISTING PAGE.
Route::get('/dealers', function () {
    return view('dealers');
});

// ADD VEHICLE PAGE.
Route::get('/sell-my-car', function () {
    return view('add-vehicle');
});

// VEHICLE DETAILS PAGE.
Route::get('/car/{vin}', function () {
    return view('vehicle-details');
});


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');;
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
    Route::post('/store', 'store')->name('store');
});


// Route::any('{slug}', function () {
//     return view('welcome');
// });
