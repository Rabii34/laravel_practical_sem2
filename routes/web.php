<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;



// handles the view request of the page  
Route::get('/form', [formController::class, 'register']);

// handles the insert request of the page
Route::post('/form', [formController::class, 'data']);

// handles the view request of the page  
Route::get('/reg/view', [formController::class, 'view']);

// passing the id through route and calling the method 
// named std_dlt from controller class to dlt the data  
Route::get('/reg/dlt/{id}', [formController::class, 'dlt']);
Route::get('/reg/edit/{id}', [formController::class, 'edit']);
Route::post('/reg/update/{id}', [formController::class, 'update']);



