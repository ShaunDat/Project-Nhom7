<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('/index');
});
//User
Auth::routes();
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Auth::routes();
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'home'])->name('index');

//Home

Route::get('/destroy/{id}', [App\Http\Controllers\ProductController::class,'destroy'])->name('destroy');
Route::get('/detail/{id}', [App\Http\Controllers\ProductController::class,'show'])->name('detail');
//Category
// Route::group(['prefix' =>'Category'],function () {
Route::get('/category', [App\Http\Controllers\CategoryController::class,'index'])->name('Categories/Category');
Route::get('/create', [App\Http\Controllers\CategoryController::class,'getCreate'])->name('Categories/createCategory');
Route::post('/create', [App\Http\Controllers\CategoryController::class,'postCreate']);
Route::get('/editCategory/{id}', [App\Http\Controllers\CategoryController::class,'getEditCate'])->name('Categories/editCategory');
Route::post('/editCategory/{id}', [App\Http\Controllers\CategoryController::class,'postEditCate'])->name('Categories/updateCategory');
Route::get('/category/delete/{id}',[App\Http\Controllers\CategoryController::class,'delete'])->name('Category/delete');;
// });
//Product
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('/Products/Product');
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('Products/Create');
Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class,'edit'])->name('Products.editProduct');
Route::post('/product/update/{id}', [App\Http\Controllers\ProductController::class,'update'])->name('products.update');
Route::get('/product/show/{id}', [App\Http\Controllers\ProductController::class,'show'])->name('Products.showProduct');
Route::post('/product/store', [App\Http\Controllers\ProductController::class,'store'])->name('/product/store');
Route::get('/product/delete/{id}', [App\Http\Controllers\ProductController::class,'destroy'])->name('Products.destroy');
//FE
Route::get('/lienhe', [App\Http\Controllers\FEController::class, 'index'])->name('lienhe');

//About
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('About/About');

/*cart */
Route::get('/cart', [App\Http\Controllers\FEController::class, 'cart'])->name('cart');

//Admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('Admin/adminMain');

<<<<<<< HEAD
=======
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

>>>>>>> f18dffac5047036861e949cc9b7128d7b4b0b7ab
// User
Route::get('/userList', [App\Http\Controllers\UserController::class,'index'])->name('Admin/userList');
Route::get('/editUser/{id}', [App\Http\Controllers\UserController::class,'getEditUser'])->name('Admin/editUser');
Route::post('/editUser/{id}', [App\Http\Controllers\UserController::class,'postEditUser'])->name('Admin/updateUser');
Route::get('/user/delete/{id}',[App\Http\Controllers\UserController::class,'delete'])->name('Admin/delete');;
Route::get('/user/create', [App\Http\Controllers\UserController::class,'getUser'])->name('Admin/createUser');
<<<<<<< HEAD

//Detail
Route::get('/detail/{id}', [App\Http\Controllers\DetailController::class,'show'])->name('detai');
=======
>>>>>>> f18dffac5047036861e949cc9b7128d7b4b0b7ab
