<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

Route::get('/', function () {
    return redirect()->route('customer.index');
});

Route::resource('customer', CustomerController::class);
