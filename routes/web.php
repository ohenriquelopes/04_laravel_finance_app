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

//Route::get('/', function () {return view('transactions/index');});

//Route::get('/', [TransactionController::class, 'index']);

Route::get('/', [TransactionController::class, 'index']);
//Route::get('/transactions/create', [TransactionController::class, 'create'])->name('create');
Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');

Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');


//Route::get('/transactions/{transaction}/edit', [TransactionController::class, 'edit'])->name('transactions.edit');
