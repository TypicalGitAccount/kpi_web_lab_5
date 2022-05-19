<?php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/en', [HomeController::class, 'indexEn']);
Route::get('/aboutUs/{lang?}', [HomeController::class, 'aboutUs']);
Route::get('/services/{lang?}', [HomeController::class, 'services']);
Route::get('/email/{lang?}', [HomeController::class, 'email']);
Route::post('/email/{lang?}', [HomeController::class, 'emailConfirmed']);
Route::get('/comments/{lang?}', [HomeController::class, 'comments']);
