<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Models\Transaction;
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
Route::resource('plant', PlantController::class);
Route::resource('distributor', DistributorController::class);
Route::resource('product', ProductController::class);
Route::resource('review', ReviewController::class);
Route::resource('cart', CartController::class);
Route::resource('transaction', Transaction::class);

Route::get('/', function () {
    return view('index', [
        'title' => 'Seger Waras'
    ]);
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/aboutus', function () {
    return view('aboutus', [
        'title' => 'About Us'
    ]);
});

Route::get('/auth', function () {
    return view('login', [
        'title' => 'Login'
    ]);
});

Route::get('/signup', function () {
    return view('register', [
        'title' => 'Register'
    ]);
});


Route::get('/adminp', function () {
    return view('adminproduct');
});

Route::get('/adminb', [BlogController::class, 'index']);

Route::get('/adminb/{blog}', [BlogController::class, 'show']);

Route::get('/berita', [BlogController::class, 'index']);

Route::get('/berita/{blog}',[BlogController::class, 'show']);

Route::get('/products/{product}', [ProductController::class, 'show']);

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
