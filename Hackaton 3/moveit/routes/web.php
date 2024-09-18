<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\MyLikeController;

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

Route::get('/dashboard', function () {
    $products = \App\Models\Product::all();
    return view('dashboard', compact('products'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Agrego las rutas de home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Agrego las rutas de products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Agrego las rutas de sports
Route::get('/sports', [SportController::class, 'index'])->name('sports.index');
Route::get('/sports/create', [SportController::class, 'create'])->name('sports.create');
Route::post('/sports', [SportController::class, 'store'])->name('sports.store');
Route::get('/sports/{sport}', [SportController::class, 'show'])->name('sports.show');
Route::get('/sports/{sport}/edit', [SportController::class, 'edit'])->name('sports.edit');
Route::put('/sports/{sport}', [SportController::class, 'update'])->name('sports.update');
Route::delete('/sports/{sport}', [SportController::class, 'destroy'])->name('sports.destroy');

// Agrego las rutas de cities
Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');
Route::post('/cities', [CityController::class, 'store'])->name('cities.store');
Route::get('/cities/{city}', [CityController::class, 'show'])->name('cities.show');
Route::get('/cities/{city}/edit', [CityController::class, 'edit'])->name('cities.edit');
Route::put('/cities/{city}', [CityController::class, 'update'])->name('cities.update');
Route::delete('/cities/{city}', [CityController::class, 'destroy'])->name('cities.destroy');

// Agrego las rutas de myLikes
Route::post('/my-likes', [MyLikeController::class, 'store'])->name('my-likes.store');

require __DIR__.'/auth.php';
