<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileuploaddataController;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\HomeController;
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
    // return view('twiliotest');
});
// Route::get('/add-perform', [FileuploaddataController::class, 'addperform']);
Route::get('/', 'HomeController@show');
Route::post('/', 'HomeController@storePhoneNumber');
Route::post('/custom', 'HomeController@sendCustomMessage');
