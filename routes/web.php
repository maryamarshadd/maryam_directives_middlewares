<?php 
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('pages.home');
});

// Route for eligible users (protected by middleware)
Route::get('/eligible', function () {
    return view('eligible');
})->middleware('EligibleForVoting')->name('eligible');


// Route for not eligible users
Route::get('/not-eligible', function () {
    return view('not-eligible');
})->name('not-eligible');

// Route to check voting eligibility (for testing purposes)
Route::get('/check-voting', function () {
    return view('check-voting');
});

//function(Request $request)
// ->middleware('eligible.for.voting')