<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestFormController;


/* Returns homepage view */
Route::get('/', function () {
    return view('welcome');
});


/* Test Form page routes, get page and post form
    'index' points to index function within TestFormController, returning the testform.blade.php view
    'store' points to the store function within TestFormController, which saves submitted data to table
*/
Route::get('/testform', [App\Http\Controllers\TestFormController::class, 'index'])->name('TestFormController.index');
Route::post('/testform', [App\Http\Controllers\TestFormController::class, 'store'])->name('TestFormController.store');

Route::get('/formdata', [App\Http\Controllers\TestFormController::class, 'show'])->name('TestFormController.show');


