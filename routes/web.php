<?php

use App\Http\Controllers\expenseController;
use Illuminate\Support\Facades\Route;


Route::get('/expenses', [expenseController::class, 'index']);

Route::get('/expenses/create', [expenseController::class, 'create']);

Route::post('/expenses', [expenseController::class, 'store']);

Route::get('/show/{id}', [expenseController::class, 'show']);

Route::get('/expenses/{expense}/edit', [expenseController::class, 'edit']);

Route::post('/update_expenses/{id}', [expenseController::class, 'update_expense']);

Route::get('/delete/{id}', [expenseController::class, 'delete']);
