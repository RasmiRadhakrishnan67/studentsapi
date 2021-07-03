<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('students/search/', 'StudentController@studentsIndex');
Route::post('students/create', 'StudentController@createStudent');
Route::put('students/update/{id}', 'StudentController@updateStudent');
Route::delete('students/delete/{id}','StudentController@deleteStudent');
Route::get('students/search/{id}', 'StudentController@searchStudent');