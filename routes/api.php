<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('employees', 'EmployeeController@index');
Route::get('employee/{emp_id}', 'EmployeeController@show');
Route::post('employee', 'EmployeeController@store');
Route::put('employee/{emp_id}', 'EmployeeController@update');
Route::delete('employee/{emp_id}', 'EmployeeController@destroy');