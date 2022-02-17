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

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/user', fn (Request $request) => $request->user());

    Route::group(['prefix' => 'user'], function () {

        Route::get('other-browser-sessions', [\App\Http\Controllers\API\OtherBrowserSessionsController::class, 'sessions']);
        Route::delete('other-browser-sessions', [\App\Http\Controllers\API\OtherBrowserSessionsController::class, 'destroy'])
            ->name('other-browser-sessions.destroy');

        Route::delete('profile-photo', [\App\Http\Controllers\API\UserProfileController::class, 'destroy'])->name('current-user-photo.destroy');
    });


    Route::group(['as' => 'api.'], function () {


        Route::as('products.')->prefix('products')->controller(\App\Http\Controllers\API\ProductsController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('{product}/tags', [\App\Http\Controllers\API\ProductsController::class, 'toggleTag'])->name('tags');
            Route::post('{product}/specifications', [\App\Http\Controllers\API\ProductsController::class, 'syncSpecifications'])->name('specifications');
            Route::post('{product}/storage-and-pricing', [\App\Http\Controllers\API\ProductsController::class, 'syncStorageAndPricing'])->name('pricing');
        });
    });
});
