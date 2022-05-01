<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DatabaseViewController;
use App\Http\Controllers\ShopController;
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

Route::get('/',[ShopController::class,'Home'])->name('Home');

Route::get('/product',[ShopController::class,'Product'])->name('Product');

Route::get('/blog',[ShopController::class,'Blog'])->name('Blog');

Route::get('/about',[ShopController::class,'About'])->name('About');

Route::get('/contact',[ShopController::class,'Contact'])->name('Contact');

/* Admin */
Route::get('/admin/login',[AdminController::class,'index'])->name('AdminLogin');

Route::get('/admin/product',[AdminController::class,'Product'])->name('AdminProduct');

Route::get('/admin/product/view',[DatabaseViewController::class,'ProductView'])->name('AdminProductView');

Route::get('/admin/product/delete/{id}',[DatabaseViewController::class,'DeleteProduct'])->name('DeleteProduct');

//post Route

Route::post('/admin/login/data',[AdminController::class,'create'])->name('AdminLoginData');

Route::post('/admin/product',[AdminController::class,'ProductCreate'])->name('AdminProductData');

/*Admin End*/
