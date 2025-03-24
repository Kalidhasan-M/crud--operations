<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

use App\Models\product;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user', function () {
    return view('user');
})->name('user');
Route::get('/Products', [ProductsController::class,'index'])->name('Products.index');
Route::get('/order', function () {
    return view('order');
})->name('order');


// Route::get('/',[UserController::class,'index'])->name('student_form');
Route::post('/store',[UserController::class,'store']);
Route::get('/user',[UserController::class,'list'])->name('user');
Route::get('/edits/{id}',[UserController::class,'edit'])->name('useredit');
Route::post('/updates/{id}',[UserController::class,'update'])->name('user.update');
Route::get('/deletes/{id}', [UserController::class, 'destroy'])->name('user.delete');


Route::post('/products',[ProductsController::class,'store'])->name('products.store');
Route::get('/edit/{id}',[ProductsController::class,'edit'])->name('product_edit');
Route::post('/update/{id}',[ProductsController::class,'update'])->name('product.update');
Route::get('/delete/{id}', [ProductsController::class, 'destroy'])->name('product.delete');




Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
