<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('transactions/index');
});

Route::get('/transactions/create', [TransactionController::class, 'create']);
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
