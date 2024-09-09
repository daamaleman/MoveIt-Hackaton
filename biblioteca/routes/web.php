<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Ruta del home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Rut para los estados
Route::get('/states', [App\Http\Controllers\StateController::class, 'index'])->name('states.index');
Route::get('/states/create', [App\Http\Controllers\StateController::class, 'create'])->name('states.create');
Route::post('/states', [App\Http\Controllers\StateController::class, 'store'])->name('states.store');
Route::get('/states/{id}', [App\Http\Controllers\StateController::class, 'show'])->name('states.show');
Route::get('/states/{id}/edit', [App\Http\Controllers\StateController::class, 'edit'])->name('states.edit');
Route::put('/states/{id}', [App\Http\Controllers\StateController::class, 'update'])->name('states.update');
Route::delete('/states/{id}', [App\Http\Controllers\StateController::class, 'destroy'])->name('states.destroy');
//Ruta para los productos
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create', [App\Http\Controllers\ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [App\Http\Controllers\ProductsController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [App\Http\Controllers\ProductsController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [App\Http\Controllers\ProductsController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [App\Http\Controllers\ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])->name('products.destroy');
// Ruta para las ciudades
Route::get('/cities', [App\Http\Controllers\CitiesController::class, 'index'])->name('cities.index');
Route::get('/cities/create', [App\Http\Controllers\CitiesController::class, 'create'])->name('cities.create');
Route::post('/cities', [App\Http\Controllers\CitiesController::class, 'store'])->name('cities.store');
Route::get('/cities/{id}', [App\Http\Controllers\CitiesController::class, 'show'])->name('cities.show');
Route::get('/cities/{id}/edit', [App\Http\Controllers\CitiesController::class, 'edit'])->name('cities.edit');
Route::put('/cities/{id}', [App\Http\Controllers\CitiesController::class, 'update'])->name('cities.update');
Route::delete('/cities/{id}', [App\Http\Controllers\CitiesController::class, 'destroy'])->name('cities.destroy');
