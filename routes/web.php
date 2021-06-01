<?php

use App\Http\Controllers\crud;
use App\Http\Controllers\pageControll\mainPage;
use App\Http\Controllers\product_infor;
use App\Http\Controllers\pageControll\productsImfoPage;
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

Route::get('/page/sign', [productsImfoPage::class,"show"]);
Route::get('/page/login', [productsImfoPage::class,"show"]);

Route::get('/page/product/{PName}', [productsImfoPage::class,"show"]);
Route::get('/', [mainPage::class,"show"]);

Route::resource('post',crud::class)->only(['index','show']);
