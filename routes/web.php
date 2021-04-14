<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articleController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [ArticleController::class, 'index']);
Route::resource('articles',ArticleController::class);
Route::post('signup',[AuthController::class,'signup']);
Route::post('login',[AuthController::class,'login']);
Route::get('login',[AuthController::class,'index']);
Route::post('ckeditor/image_upload', [ArticleController::class,'upload'])->name('upload');
Route::group(['middleware'=>'auth:api'],function(){
  Route::get('user',[AuthController::class,'user']);
  Route::get('logout',[AuthController::class,'logout']);
});