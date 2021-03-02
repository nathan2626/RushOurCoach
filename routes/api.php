<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/informations', [App\Http\Controllers\Api\InformationsController::class, 'get'])->name('getInformations');

Route::post('/reservation', [App\Http\Controllers\Api\ReservationController::class, 'book'])->name('book');

Route::post('/reservation/annulation/{token}', [App\Http\Controllers\Api\ReservationController::class, 'cancel'])->name('cancel');

