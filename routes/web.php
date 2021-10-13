<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\LoginController;

use App\Http\Controllers\User\RegistrationController;

use App\Http\Controllers\Category\CategoryController;

use App\Http\Controllers\Product\ProductController;

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

/* Route::get('/', function () {
    return view('welcome');
}); 

//Route::get('/dashboard', [LoginController::class,'dashboard'])->name('dashboard.index');

*/

/* 
Route::get('/login', [LoginController::class,'index'])->name('login');

Route::post('/login/process', [LoginController::class,'process'])->name('dashboard.login.process'); 

Route::get('/registration', [RegistrationController::class,'registration'])->name('registration');

Route::post('/registration/process', [RegistrationController::class,'process'])->name('dashboard.registration.process'); */


/* Route::get('/logout', [LoginController::class,'logout'])->name('dashboard.logout'); */

//category management
/* Route::get('dashboard/category/create', [CategoryController::class,'create'])->name('category.create');
Route::post('dashboard/category/store', [CategoryController::class,'store'])->name('category.store'); */

//Route::get('dashboard/category/create', [CategoryController::class,'create'])->name('category.create');

/* Route::get('dashboard/category/{category}/edit', [CategoryController::class,'edit'])->name('category.edit');
Route::put('dashboard/category/{category}', [CategoryController::class,'update'])->name('category.update');

Route::get('dashboard/category/destroy{category}', [CategoryController::class,'destroy'])->name('category.destroy'); */

//product management
/* Route::get('dashboard/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('dashboard/product/store', [ProductController::class,'store'])->name('product.store');

Route::get('dashboard/product/destroy{product}', [ProductController::class,'destroy'])->name('product.destroy');
Route::get('dashboard', [ProductController::class,'index'])->name('dashboard.index'); */