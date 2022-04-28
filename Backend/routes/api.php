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

Route::post("/products", "App\Http\Controllers\Api\CrudProductsController@create")->name("create.products");
Route::get("/products", "App\Http\Controllers\Api\CrudProductsController@showAll")->name("show.products.all");
Route::get("/products/{id}", "App\Http\Controllers\Api\CrudProductsController@showDataSpecify")->name("show.products.data.specify");
Route::put("/products/{id}", "App\Http\Controllers\Api\CrudProductsController@updateDataSpecify")->name("update.products.specify");
Route::delete("/products/{id}", "App\Http\Controllers\Api\CrudProductsController@deleteDataSpecify")->name("delete.products.data.specify");
Route::delete("/products", "App\Http\Controllers\Api\CrudProductsController@deleteAll")->name("delete.products.all");
