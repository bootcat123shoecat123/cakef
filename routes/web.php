<?php

use App\Http\Controllers\crud;
use App\Http\Controllers\pageControll\aboutController;
use App\Http\Controllers\pageControll\backContrller;
use App\Http\Controllers\pageControll\backDropProductControll;
use App\Http\Controllers\pageControll\backMainPageControll;
use App\Http\Controllers\pageControll\backProductControll;
use App\Http\Controllers\pageControll\logincontroller;
use App\Http\Controllers\pageControll\mainPage;
use App\Http\Controllers\pageControll\backMemberListShow;
use App\Http\Controllers\pageControll\cartContrller;
use App\Http\Controllers\pageControll\memberContrller;
use App\Http\Controllers\pageControll\memberInforContrller;
use App\Http\Controllers\pageControll\memberListShow;
use App\Http\Controllers\pageControll\memberOrderController;
use App\Http\Controllers\product_infor;
use App\Http\Controllers\pageControll\productsImfoPage;
use App\Http\Controllers\pageControll\signcontroller;
use App\Http\Middleware\backMiddleWare;
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


Route::get('/back', [backContrller::class,"show"])->middleware([backMiddleWare::class]); 
Route::get('/back/update/{id}', [backProductControll::class,"edit"])->middleware([backMiddleWare::class]);
Route::get('/back/product_ins_form', [backProductControll::class,"index"])->middleware([backMiddleWare::class]);
Route::get('/back/member_list_show', [backMemberListShow::class,"show"])->middleware([backMiddleWare::class]);
Route::get('/back/back_delete', [backDropProductControll::class,"show"])->middleware([backMiddleWare::class]);
Route::get('/back/back_search', [backMainPageControll::class,"show"])->middleware([backMiddleWare::class]);
Route::get('/back/product/delete/{id}', [backDropProductControll::class,"delete"])->middleware([backMiddleWare::class]);
Route::get('/cart/delete/{id}', [cartContrller::class,"delete"]);
Route::get('/page/cart', [cartContrller::class,"show"]);
Route::get('/page/memberOrder', [memberOrderController::class,"show"]);
Route::get('/page/memberInfor', [memberInforContrller::class,"show"]);
Route::get('/page/member', [memberContrller::class,"show"]);
Route::get('/page/sign', [signcontroller::class,"show"]);
Route::get('/page/login', [logincontroller::class,"show"]);
Route::get('/page/logout', [logincontroller::class,"logout"]);
Route::get('/page/about', [aboutController::class,"show"]);
Route::get('/page/product/{PName}', [productsImfoPage::class,"show"]);
Route::get('/msg/{msg}', [mainPage::class,"success"]); 
Route::get('/', [mainPage::class,"show"]); 

Route::post('/change/infor', [memberContrller::class,"changer"]);
Route::post('/back/order/search', [backMainPageControll::class,"search"])->middleware([backMiddleWare::class]);
Route::post('/back/create', [backProductControll::class,"store"])->middleware([backMiddleWare::class]);
Route::post('/back/updateData/{id}', [backProductControll::class,"update"])->middleware([backMiddleWare::class]);
Route::post('/back/member/delete', [memberListShow::class,"delete"])->middleware([backMiddleWare::class]);
Route::post('/order/submit', [cartContrller::class,"submit"]);
Route::post('/cart',[productsImfoPage::class,"cart"]);
Route::post('/sign',[signcontroller::class,"getPostSign"]);
Route::post('/login',[logincontroller::class,"getPostLogin"]);