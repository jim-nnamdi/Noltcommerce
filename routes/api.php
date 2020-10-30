<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(["prefix" => "v1", "namespace" => "Api"], function () {
    Route::get(
        "categories",
        [CategoryController::class, "getAllCategories"]
    );
    Route::get(
        "categories/{category}",
        [CategoryController::class, "show"]
    );
    Route::post(
        "categories",
        [CategoryController::class, "store"]
    );
    Route::put(
        "categories",
        [CategoryController::class, "store"]
    );
    Route::delete(
        "categories/{category}",
        [CategoryController::class, "destroy"]
    );
    Route::get("products", [ProductController::class, "getAllProducts"]);
});
