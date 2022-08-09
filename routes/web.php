<?php

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Produtc
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('Products/Product');
Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'create'])->name('Products/Create');

//FE

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('About/About');
/*lienhe*/

Route::get('/lienhe', [App\Http\Controllers\FEController::class, 'index'])->name('lienhe');

/*cart */
Route::get('/cart', [App\Http\Controllers\FEController::class, 'cart'])->name('cart');

//Admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('Admin/adminMain');

//Category
    Route::get('/category', [App\Http\Controllers\CategoryController::class,'index'])->name('Categories/Category');
    Route::get('/create', [App\Http\Controllers\CategoryController::class,'getCreate'])->name('Categories/createCategory');
    Route::post('/create', [App\Http\Controllers\CategoryController::class,'postCreate']);
    Route::get('/editCategory/{id}', [App\Http\Controllers\CategoryController::class,'getEditCate'])->name('Categories/editCategory');
    Route::post('/editCategory/{id}', [App\Http\Controllers\CategoryController::class,'postEditCate'])->name('Categories/updateCategory');
    Route::get('/category/delete/{id}',[App\Http\Controllers\CategoryController::class,'delete'])->name('Category/delete');;

//Product
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('Products/Product');
Route::get('/Products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('Products/Create');
Route::get('/Products/edit/{id}', [App\Http\Controllers\ProductController::class,'edit'])->name('Products.editProduct');
Route::post('/Products/update/{id}', [App\Http\Controllers\ProductController::class,'update'])->name('Products.updateProduct');
Route::get('/Products/showProduct/{id}', [App\Http\Controllers\ProductController::class,'show'])->name('Products.showProduct');
Route::post('/Products/store', [App\Http\Controllers\ProductController::class,'store'])->name('/Products/Product');
Route::get('/Products/delete/{id}', [App\Http\Controllers\ProductController::class,'destroy'])->name('Products.destroy');

//slider
Route::get('/home-slider', [App\Http\Controllers\SliderController::class,'index'])->name('index');

Route::get('/add-slider', [App\Http\Controllers\SliderController::class,'create'])->name('create');

Route::post('/store-slider', [App\Http\Controllers\SliderController::class,'store'])->name('store');
