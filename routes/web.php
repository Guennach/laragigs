<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Listings;
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

Route::get('/', [ListingController::class, 'index']);

Route::get('/find/{listing}', [ListingController::class, 'show']);

/*Route::get('/hello', function() {
    return response('<h1>hello world</h1>')
    ->header('Content-Type', 'text/plain');
});

Route::get('/post/{id}', function($i) {
    return response('<h1>'.$i.'</h1>');
});

Route::get('/request', function(Request $request){
    dd($request->name);
});*/