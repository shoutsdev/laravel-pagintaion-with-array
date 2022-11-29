<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PaginateController::class,'index'])->name('paginate');
