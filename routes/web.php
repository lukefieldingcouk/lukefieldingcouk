<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestFormController;

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
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/testform', [App\Http\Controllers\TestFormController::class, 'index'])->name('TestFormController.index');
Route::post('/testform', [App\Http\Controllers\TestFormController::class, 'store'])->name('TestFormController.store');