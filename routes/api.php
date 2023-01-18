<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(EmployeeController::class)->group(function(){
    Route::get('/employees', 'index');
    Route::post('/employees', 'store');
    Route::get('/employees/{id}', 'show');
    Route::put('/employees/{id}', 'update');
    Route::delete('/employees/{id}', 'destroy');
});