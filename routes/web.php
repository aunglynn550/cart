<?php

use App\Http\Controllers\Adimn\CategoryController;
use App\Http\Controllers\Adimn\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
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
////////////////// Admin All Routes ////////////////

Route::get('/admin',[AdminController::class,'index'])->name('admin.dashboard');

////     Admin Category All Routes   /////
Route::get('/admin/categories',[CategoryController::class,'index'])->name('admin.categories');
Route::get('/admin/add_cate',[CategoryController::class,'add_category'])->name('admin.add_category');


////     Admin Category All Routes   /////
Route::get('/admin/add_product',[ProductController::class,'add_product'])->name('admin.add_product');
Route::get('/admin/products',[ProductController::class,'index'])->name('admin.products');




/////////////////  User All Routes/////////////////

Route::get('/',[ClientController::class,'home'])->name('home');
Route::get('/shop',[ClientController::class,'shop'])->name('shop');
Route::get('/cart',[ClientController::class,'cart'])->name('cart');
Route::get('/checkout',[ClientController::class,'checkout'])->name('checkout');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



