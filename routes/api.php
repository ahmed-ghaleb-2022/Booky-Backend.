<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

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




Route::get('/categories',[CategoryController::class,'index']);



Route::get('/books',[BookController::class,'index']);
Route::get('/book/{id}',[BookController::class,'show']);



Route::prefix('/book')->group(function (){
        Route::post('/store',[BookController::class,'store']);
        Route::put('/{id}',[BookController::class,'update']);
        Route::delete('/{id}',[BookController::class,'destroy']);

});