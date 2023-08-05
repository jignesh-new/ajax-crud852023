<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;

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
    return view('formvalidation');
});

Route::post('ajax/add',[AjaxController::class,'add'])->name('ajax.add');
Route::post('ajaxvalidation',[AjaxController::class,'ajaxvalidate'])->name('ajax.validate');
