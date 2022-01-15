<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\StaffController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\ParcelController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\NoticeController;
use App\Http\Controllers\Backend\TrackController;

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
    Route::get('/home one',[HomeController::class,'home'])->name('user.home.one');
    Route::get('/Contact',[ContactController::class,'contact'])->name('user.contact');
    Route::post('/Contact',[ContactController::class,'contact'])->name('user.contact');
    Route::get('/Notice board',[NoticeController::class,'notice'])->name('user.notice.board');
    Route::get('/Our Services',[ServiceController::class,'service'])->name('user.our.services');





});















Route::get('/admin-portal/login',[LoginController::class,'login'])->name('admin.login');
Route::post('/admin-portal/login',[LoginController::class,'doLogin'])->name('admin.do.login');




Route::group(['prefix'=>'admin-portal','middleware'=>'auth'],function(){
    Route::get('/', function () {
        return view('admin.layouts.home');
    })->name('admin');


    Route::get('/signout',[LoginController::class,'logout'])->name('admin.logout');

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
    Route::get('/branch/branch-list/Delete/{id}',[BranchController::class,'delete'])->name('branch.delete');
    Route::get('/branch/branch-list/Edit/{id}',[BranchController::class,'edit'])->name('branch.edit');
    Route::put('/branch/branch-list/update/{id}',[BranchController::class,'update'])->name('branch.update');

    Route::get('/branch/add-staff',[StaffController::class,'create'])->name('staff.create');
    Route::post('/branch/add-staff',[StaffController::class,'store'])->name('staff.store');
    Route::get('/branch/staff-list',[StaffController::class,'list'])->name('staff.list');


    Route::get('/parcel',[ParcelController::class,'create'])->name('parcel.create');
     Route::post('/parcel',[ParcelController::class,'store'])->name('parcel.store');
     Route::get('/parcel-details',[ParcelController::class,'details'])->name('parcel.details');

     Route::get('/track',[TrackController::class,'create'])->name('track.create');
     Route::post('/track',[TrackController::class,'store'])->name('track.store');









});
