<?php

use App\Http\Controllers\Admin\AdCuadraController;
use App\Http\Controllers\Admin\AdManzanaController;

use Illuminate\Support\Facades\Route;

///////////////////////////////////////////////////////////////////////////////

Route::resource('manzana', AdManzanaController::class)->names('admin.manzana');
Route::resource('cuadra', AdCuadraController::class)->names('admin.cuadra');
