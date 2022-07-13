<?php

use App\Http\Controllers\SeasonController;
use App\Http\Controllers\SeriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/series', SeriesController::class)
    ->only(['index', 'create', 'store', 'destroy', 'update', 'edit']);

Route::get('/series/{series}/seasons', [SeasonController::class, 'index'])->name('seasons.index');
