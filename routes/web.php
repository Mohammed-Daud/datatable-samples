<?php

use App\Employee;
use Illuminate\Support\Facades\Route;

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
    $employees =  Employee::all();
    return view('welcome', compact('employees'));
});

Route::get('individual-column-searching', function () {
    $employees =  Employee::all();
    return view('individual_column_searching', compact('employees'));
});
