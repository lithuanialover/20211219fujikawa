<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

//Route::get('/', [IndexController::class, 'index']);

// 入力画面
Route::get('/', [IndexController::class],'index');

// 完了画面
Route::post('/', [IndexController::class],'thanks');
