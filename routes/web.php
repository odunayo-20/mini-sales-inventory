<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return view('auth/login');
});
// Route::get('/register', function () {
//     return view('auth/register');
// });

Auth::routes();
// Route::get('/', LoginController::class)->name();
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/edit_profile', [HomeController::class, 'edit_profile'])->name('edit_profile');
Route::POST('/update_profile/{id}', [HomeController::class,'update_profile'])->name('update_profile');
Route::get('/password_change/', [HomeController::class,'update_password'])->name('update_password');



Route::resource('order', OrderController::class);
Route::resource('category', CategoryController::class);
Route::resource('tax', TaxController::class);
Route::resource('unit', UnitController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('customer', CustomerController::class);
Route::resource('product', ProductController::class);
Route::resource('invoice', InvoiceController::class);
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
Route::resource('purchase', PurchaseController::class);
Route::get('/findPrice', [InvoiceController::class, 'findPrice'])->name('findPrice');
Route::get('/findPricePurchase', [PurchaseController::class, 'findPricePurchase'])->name('findPricePurchase');

