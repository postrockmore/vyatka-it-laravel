<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromotionsController;
use App\Http\Controllers\ReviewsController;
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

Route::get( '/', [ HomeController::class, 'index' ] )->name( 'home' );
Route::get( '/reviews', [ ReviewsController::class, 'index' ] )->name( 'reviews' );
Route::get( '/promotions', [ PromotionsController::class, 'index' ] )->name( 'promotions' );
Route::get( '/projects', [ ProjectsController::class, 'index' ] )->name( 'projects' );
