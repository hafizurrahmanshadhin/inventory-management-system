<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::group(['middleware' => ['auth']], function () {
    Route::resource('products', ProductController::class)->except(['show']);
    // Add a separate route for showing a product
    Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
});
