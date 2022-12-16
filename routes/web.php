<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TransactionController;
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
Route::resource('transaction', TransactionController::class);
Route::resource('cartItem', CartItemController::class);

Route::get('/', [ProductController::class, 'indexIndex']);

Route::get('/products', [ProductController::class, 'index'], []);

Route::get('/aboutus', [DistributorController::class, 'index']);

Route::get('/adminp', [ProductController::class, 'indexAdmin']);

Route::get('/adminp/{product}', [ProductController::class, 'edit']);

Route::get('/adminb', [BlogController::class, 'indexAdmin']);

Route::get('/admind', [DistributorController::class, 'indexAdmin']);

Route::get('/admind/{distributor}', [DistributorController::class, 'edit']);

Route::get('/adminf', [PlantController::class, 'indexAdmin']);

Route::get('/berita', [BlogController::class, 'index']);

Route::get('/berita/{blog}',[BlogController::class, 'show']);

Route::get('/products/{product}', [ProductController::class, 'show']);

Route::get('/cart', [CartController::class, 'show']);

Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [LogoutController::class, 'perform']);
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
