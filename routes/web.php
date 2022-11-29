<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\statecontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[statecontroller::class,'rejester']);
route::post('insertrej',[statecontroller::class,'insertrej']);
route::get('getdis/{id}',[statecontroller::class,'getdis']);
route::get('getcity/{id}',[statecontroller::class,'getcity']);
