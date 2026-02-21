<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/movies', [ProductController::class, 'index']);

Route::get('/', function () {
    return redirect('/movies');
});


