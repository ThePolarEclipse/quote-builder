<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuoteController;

Route::resource('products', ProductController::class);
Route::resource('quotes', QuoteController::class);
