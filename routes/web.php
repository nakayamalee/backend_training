<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;


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

Route::get('/comment', [Controller::class,'comment']);

Route::get('/login', [Controller::class,'login']);

Route::get('/shopping1', [ShoppingCartController::class,'step1']);
Route::get('/shopping2', [ShoppingCartController::class,'step2']);
Route::get('/shopping3', [ShoppingCartController::class,'step3']);
Route::get('/shopping4', [ShoppingCartController::class,'step4']);

// Route::get('/banner', [BannerController::class,'index']);   //總表
// Route::post('/banner', [BannerController::class,'store']);   //儲存
// Route::get('/banner/create', [BannerController::class,'create']);   //新增
// Route::get('/banner/{id}', [BannerController::class,'show']);   //檢視
// Route::post('/banner/{id}', [BannerController::class,'edit']);   //編輯
// Route::patch('/banner/{id}', [BannerController::class,'update']);   //更新
// Route::delete('/banner/{id }', [BannerController::class,'destroy']);   //刪除

//or

// Route::resource('banner', BannerController::class);


//banner相關路由
Route::prefix('/banner')->group(function () {
    Route::get('/',[BannerController::class,'index']);    //列表頁
    Route::get('/create',[BannerController::class,'create']);    //新增頁
    Route::post('/store',[BannerController::class,'store']);    //儲存
    Route::get('/edit/{id}',[BannerController::class,'edit']);    //編輯
    Route::post('/update/{id}',[BannerController::class,'update']);    //更新
    Route::post('/delete/{id}',[BannerController::class,'destroy']);    //刪除
});

//product相關路由
Route::prefix('/product')->group(function () {
    Route::get('/',[ProductController::class,'index']);    //列表頁
    Route::get('/create',[ProductController::class,'create']);    //新增頁
    Route::post('/store',[ProductController::class,'store']);    //儲存
    Route::get('/edit/{id}',[ProductController::class,'edit']);    //編輯
    Route::post('/update/{id}',[ProductController::class,'update']);    //更新
    Route::post('/delete/{id}',[ProductController::class,'destroy']);    //刪除
});
