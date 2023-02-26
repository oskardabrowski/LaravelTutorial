<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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




// All listings
Route::get('/', [ListingController::class, 'index']);

// Show edit form
Route::get('/listings/edit/{listing}', [ListingController::class, 'edit'])->middleware('auth');

// Show create form
Route::get('/listings/create', [ListingController::class, 'create'])
    ->middleware('auth');

// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])
    ->middleware('auth');

// Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Edit submit to update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Edit submit to update
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Create new user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Register/Create form
Route::get('/login', [UserController::class, 'login'])->name('login')
    ->middleware('guest');

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);




// Route::get('/component', function () {
//     return view('testcomponent');
// });
// Route::get('/single/{id}', function ($id) {
//     return view('listings', [
//         'heading' => 'Latest Listings',
//         'listings' => [Listing::find($id)]
//     ]);
// });
