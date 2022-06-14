<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShoppingCartController;


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

Route::get('/', [Controller::class,'index']);
Route::get('/comment/save', [Controller::class,'save_comment']);

Route::get('/comment/delete/{target}', [Controller::class,'delete_comment']);

Route::get('/comment/edit/{id}', [Controller::class,'edit_comment']);
Route::get('/comment/update/{id}', [Controller::class,'update_comment']);

Route::get('/login', [Controller::class,'login']);


Route::get('/shopping1', [ShoppingCartController::class,'step1']);
Route::get('/shopping2', [ShoppingCartController::class,'step2']);
Route::get('/shopping3', [ShoppingCartController::class,'step3']);
Route::get('/shopping4', [ShoppingCartController::class,'step4']);
Route::get('/comment', [ShoppingCartController::class,'comment']);


