<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\StaffController;
use App\Http\Controllers\frontend\UserController;
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
    return redirect()->route('user');
});


Route::group(['prefix'=>'user-portal'],function(){
    Route::get('/', function () {
        return view('Frontend.index');
    })->name('user');

    Route::post('/registration',[UserController::class,'registration'])->name('user.registration');
    Route::post('/login',[UserController::class,'login'])->name('user.login');
    Route::get('/logout',[UserController::class,'logout'])->name('user.logout');




});
















Route::get('/', function () {
    return redirect()->route('admin');
});


Route::group(['prefix'=>'admin-portal'],function(){
    Route::get('/', function () {
        return view('admin.master');
    })->name('admin');
    Route::get('/orders',[OrderController::class,'orderList'])->name('admin.orders');
    Route::get('/products',[ProductController::class,'productList'])->name('admin.products');
    Route::get('/products/create',[ProductController::class,'productCreate'])->name('admin.products.create');
    Route::post('/products/store',[ProductController::class,'productStore'])->name('admin.products.store');

    // Category

    Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
    Route::get('/category/form',[CategoryController::class,'form'])->name('category.form');
    Route::post('/category/add',[CategoryController::class,'add'])->name('category.add');




    Route::get('/branch/add-branch',[BranchController::class,'create'])->name('branch.create');
    Route::post('/branch/add-branch',[BranchController::class,'store'])->name('branch.store');
    Route::get('/branch/branch-list',[BranchController::class,'list'])->name('branch.list');

    Route::get('/branch/add-staff',[StaffController::class,'create'])->name('staff.create');
    Route::post('/branch/add-staff',[StaffController::class,'store'])->name('staff.store');
    Route::get('/branch/staff-list',[StaffController::class,'list'])->name('staff.list');



});
