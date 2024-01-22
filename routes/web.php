<?php

use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailProductComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShoppingCartComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', HomeComponent::class);
    Route::get('/product/{slug}', DetailProductComponent::class)->name('product.detail');
    Route::get('/cart', ShoppingCartComponent::class)->name('product.cart');
    Route::get('/checkout', CheckoutComponent::class)->name('product.checkout');

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
