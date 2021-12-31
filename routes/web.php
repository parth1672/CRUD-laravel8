<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;

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
    return view('home');
});

Route::post('/',[MemberController::class,'addData']);//for add data in database


Route::get('show',[ShowController::class,'show']);// show data from database



Route::get('update/{id}',[UpdateController::class,'update']);//for getting data from database
Route::post('update',[UpdateController::class,'updatedata']);//for update data in database

Route::get('delete/{id}',[DeleteController::class,'delete']);//for delete data

Route::view('delete2','delete2');
Route::post('delete2',[DeleteController::class,'delete2']);
Route::view('update2','update2');
Route::post('update2',[UpdateController::class,'updatedata2']);