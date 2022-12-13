<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
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

Route::resource('blog', BlogController::class);

Route::get('/', function () {
    return view('index', [
        'title' => 'Seger Waras'
    ]);
});

Route::get('/products', function () {
    return view('product', [
        'title' => 'Product'
    ]);
});

Route::get('/aboutus', function () {
    return view('aboutus', [
        'title' => 'About Us'
    ]);
});

Route::get('/berita', [BlogController::class, 'index']);

Route::get('/berita/{blog}',[BlogController::class, 'show']);

Route::get('/products/id', function(){
    return view('showproduct', [
        'title' => 'Product'
    ]);
});

Route::get('/cart', function(){
    return view('cart', [
        'title' => 'Shopping Cart'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
