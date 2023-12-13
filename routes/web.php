<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;




Route::get('/form', [formController::class, 'register']);
Route::post('/form', [formController::class, 'data']);
Route::get('/reg/view', [formController::class, 'view']);
Route::get('/reg/dlt/{id}', [formController::class, 'dlt']);
Route::get('/reg/edit/{id}', [formController::class, 'edit']);
Route::post('/reg/update/{id}', [formController::class, 'update']);



