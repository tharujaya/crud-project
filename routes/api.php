<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegistrationController;
use App\Http\Controllers\Api\CategoryController;
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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */



Route::post('login', [LoginController::class,'process']);

Route::get('logout', [LoginController::class,'logout']);

Route::post('registration', [RegistrationController::class,'process']);

Route::resource("category",CategoryController::class);

Route::resource("product",ProductController::class);

/* Route::get('dashboard/product/', [ProductController::class,'index'])->name('product.index');
Route::post('dashboard/product/store', [ProductController::class,'store'])->name('product.store');
Route::get('dashboard/product/show/{id}', [ProductController::class,'show'])->name('product.show');
Route::get('dashboard/product/destroy/{product}', [ProductController::class,'destroy'])->name('product.destroy');
Route::put('dashboard/product/{product}', [ProductController::class,'update'])->name('product.update'); */