<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'post']);
Route::get('/thanks', function () {
    return view('thanks');
});