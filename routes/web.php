<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IMCRecordController;

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

Route::get('/', [IMCRecordController::class, 'index']);
Route::get('/imc', [IMCRecordController::class, 'imc']);

Route::get('/test', function () {
    return view('welcome');
});
