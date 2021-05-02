<?php

use App\Http\Controllers\ConverterController;
use App\Http\Controllers\ImportCurrenciesController;
use App\Http\Controllers\ShowCurrencyController;
use App\Http\Controllers\SubmitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ConverterController::class, 'index']);

Route::get('/currencies-import', [ImportCurrenciesController::class, 'perform'])->name('currencies.perform');
Route::post('/submit', [SubmitController::class, 'index'])->name('submit.index');
Route::get('/currencies/{currency}', [ShowCurrencyController::class, 'show'])->name('currencies.show');
