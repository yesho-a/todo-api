<?php

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



Route::get('tasks', 'App\Http\Controllers\TodoApiController@getAllTasks');
Route::get('tasks/{id}', 'App\Http\Controllers\TodoApiController@getTask');
Route::post('tasks/create', 'App\Http\Controllers\TodoApiController@createTask');
Route::patch('update/{id}', 'App\Http\Controllers\TodoApiController@updateTask');
Route::delete('delete/{id}','App\Http\Controllers\TodoApiController@deleteTask');