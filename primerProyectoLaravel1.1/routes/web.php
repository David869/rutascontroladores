<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CarController;

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

/*
Route::get('/car', function () {
    return view('car.index');
});

Route::get('car/create',[CarController::class, 'create']);*/

Route::resource('car', CarController::class);