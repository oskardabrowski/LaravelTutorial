<?php

use App\Http\Controllers\ListingController;
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
Route::get('/listings/edit/{listing}', [ListingController::class, 'edit']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store listing data
Route::post('/listings', [ListingController::class, 'store']);

// Edit submit to update
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);



// Route::get('/component', function () {
//     return view('testcomponent');
// });
// Route::get('/single/{id}', function ($id) {
//     return view('listings', [
//         'heading' => 'Latest Listings',
//         'listings' => [Listing::find($id)]
//     ]);
// });
