<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReziserController;
use App\Http\Controllers\SerijaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('/users/{id}', [UserController::class, 'show'])->name('show');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('reziser', ReziserController::class);

   
  

});
