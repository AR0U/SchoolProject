<?php
namespace App\Http\Controllers;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/todoLists', [todoController::class, 'getAllLists']);
Route::prefix('/todoList')->group(function(){
    Route::post('/insertList',[todoController::class,'insertList']);
    Route::post('/updateList',[todoController::class,'updateList']);
    Route::post('/deleteList',[todoController::class,'deleteList']);
    Route::post('/finishList',[todoController::class,'finishList']);
});
Route::get('/getDoingLists', [todoController::class, 'getDoingList']);
Route::get('/getDoneLists', [todoController::class, 'getDoneList']);

