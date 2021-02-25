<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservation.index');
Route::post('/reservation', [App\Http\Controllers\ReservationController::class, 'sendReservation'])->name('reservation.send');


Route::get('/reservation/annulation/{token}', [App\Http\Controllers\AnnulationController::class, 'index'])->name('annulation.index');
Route::post('/reservation/annulation/{token}', [App\Http\Controllers\AnnulationController::class, 'delete'])->name('annulation.delete');

Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('index');

Route::get('/categories/category', [App\Http\Controllers\SingleCategoryController::class, 'index'])->name('index');

Route::get('/categories/category/coach', [App\Http\Controllers\SingleCoachController::class, 'index'])->name('index');
