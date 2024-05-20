<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromotionsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ServicesController;
use App\Models\Project\Project;
use App\Models\Project\ProjectCategory;
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
Route::get( '/about', [ AboutController::class, 'index' ] )->name( 'about' );

// Projects
Route::controller( ProjectsController::class )->group( function () {
    Route::get( '/projects', 'index' )
        ->name( 'projects' );

    Route::get( '/projects/{project_category:slug}', 'category' )
        ->name( 'projects.category' )
        ->fallback();

    Route::get( '/project/{project:slug}', 'single' )
        ->name( 'project' )
        ->fallback();
} );

// Services
Route::controller( ServicesController::class )->group( function () {
    Route::get( '/services', 'index' )
        ->name( 'services' );

    Route::get( '/services/{service_category:slug}', 'category' )
        ->name( 'services.category' )
        ->fallback();

    Route::get( '/{service:slug}', 'single' )
        ->name( 'services.single' )
        ->fallback();
});


