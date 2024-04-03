<?php

use Illuminate\Support\Facades\Route;

// MANUALLY ADDED CONTROLLERS
use App\Http\Controllers\CarController;

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

// LOGIN PAGE.
Route::get('/login', function () {
    return view('login');
});

// REGISTRATION PAGE.
Route::get('/register', function () {
    return view('register');
});


// Route::any('{slug}', function () {
//     return view('welcome');
// });
