<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
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

/* View Home Page */
Route::GET('/', [CompanyCRUDController::class, "index"]);
/* Insert Data */
Route::POST('/', [CompanyCRUDController::class, "create"]);
/* Edit Data */
Route::GET('/edit/{id}', [CompanyCRUDController::class, "edit"]);
/* Update Data */
Route::PUT('/edit/{id}', [CompanyCRUDController::class, "update"]);
/* Delete Data */
Route::GET('/delete/{id}', [CompanyCRUDController::class, "destroy"]);


