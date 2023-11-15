<?php
use App\Http\Controllers\Admin\AdSectorController;
use App\Http\Controllers\Admin\AdDireccionController;

use Illuminate\Support\Facades\Route;

///////////////////////////////////////////////////////////////////////////////

Route::resource('sector', AdSectorController::class)->names('admin.sector');
Route::resource('direccion', AdDireccionController::class)->names('admin.direccion');
