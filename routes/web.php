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

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('About/About');
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
    Route::get('/category/delete/{id}',[App\Http\Controllers\CategoryController::class,'delete'])->name('Category/delete');

//Product
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('/Products/Product');
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('Products/Create');
Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class,'edit'])->name('Products.editProduct');
Route::post('/product/update/{id}', [App\Http\Controllers\ProductController::class,'update'])->name('products.update');
Route::get('/product/show/{id}', [App\Http\Controllers\ProductController::class,'show'])->name('Products.showProduct');
Route::post('/product/store', [App\Http\Controllers\ProductController::class,'store'])->name('/product/store');
Route::get('/product/delete/{id}', [App\Http\Controllers\ProductController::class,'destroy'])->name('Products.destroy');

// User
Route::get('/userList', [App\Http\Controllers\UserController::class,'index'])->name('Admin/userList');
Route::get('/editUser/{id}', [App\Http\Controllers\UserController::class,'getEditUser'])->name('Admin/editUser');
Route::post('/editUser/{id}', [App\Http\Controllers\UserController::class,'postEditUser'])->name('Admin/updateUser');
Route::get('/user/delete/{id}',[App\Http\Controllers\UserController::class,'delete'])->name('Admin/delete');;
Route::get('/user/create', [App\Http\Controllers\UserController::class,'getUser'])->name('Admin/createUser');


//slider
Route::get('/home-slider', [App\Http\Controllers\SliderController::class,'index'])->name('index');

Route::get('/add-slider', [App\Http\Controllers\SliderController::class,'create'])->name('create');

Route::post('/store-slider', [App\Http\Controllers\SliderController::class,'store'])->name('store');

Route::get('/edit-slider/{id}', [App\Http\Controllers\SliderController::class,'edit'])->name('edit');

Route::put('/update-slider/{id}', [App\Http\Controllers\SliderController::class,'update'])->name('update');

Route::get('/destroy-slider/{slider}', [App\Http\Controllers\SliderController::class,'destroy'])->name('destroy');
