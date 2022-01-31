<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\StaffController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ParcelController;
use App\Http\Controllers\Backend\TrackController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\NoticeController;
use App\Http\Controllers\frontend\BookingController;
use App\Http\Controllers\frontend\InformationController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\frontend\UpdateController;
use App\Http\Controllers\frontend\UserTrackController;


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

    Route::get('/Contact',[ContactController::class,'create'])->name('user.contact');
    Route::post('/Contact',[ContactController::class,'contact'])->name('user.contact');

    Route::get('/Notice board',[NoticeController::class,'notice'])->name('user.notice.board');

    Route::get('/Our Services',[ServiceController::class,'service'])->name('user.our.services');

    Route::get('/Booking Parcel',[BookingController::class,'booking'])->name('user.booking.parcel');
    Route::post('/Booking Parcel',[BookingController::class,'store'])->name('user.booking.store');

    Route::get('/Profile',[ProfileController::class,'profile'])->name('user.profile');

    Route::get('/Customer Information',[InformationController::class,'information'])->name('user.customer.information');
    Route::post('/Customer Information',[InformationController::class,'store'])->name('user.customer.store');

    Route::get('/Update/{id}',[UpdateController::class,'update'])->name('user.update');
    Route::put('/Update/{id}',[UpdateController::class,'store'])->name('user.update.store');

    Route::get('/UserTrack',[UserTrackController::class,'tracking'])->name('user.tracking');
    Route::post('/UserTrack',[UserTrackController::class,'store'])->name('user.tracking.store');
    Route::get('/UserTrack/Tracking-list',[UserTrackController::class,'list'])->name('user.tracking.list');
    Route::get('/UserTrack/search',[UserTrackController::class,'show'])->name('user.tracking.show');

    Route::get('/User/payment-status',[PaymentController::class,'Payment'])->name('user.payment.status.create');
    // Route::get('/User/payment-status/payment/{id}',[PaymentController::class,'Payment'])->name('user.payment.status.create');
    // Route::post('/User/payment-status',[PaymentController::class,'store'])->name('user.payment.status.store');

});















Route::get('/admin-portal/login',[LoginController::class,'login'])->name('admin.login');
Route::post('/admin-portal/login',[LoginController::class,'doLogin'])->name('admin.do.login');



Route::group(['prefix'=>'admin-portal','middleware'=>['auth','login']],function(){
    // Route::get('/', function () {
    //     return view('admin.layouts.home');
    // })->name('admin');
    Route::get('/',[LoginController::class,'dashboard'])->name('admin');


    Route::get('/signout',[LoginController::class,'logout'])->name('admin.logout');


    Route::get('/orders',[OrderController::class,'orderList'])->name('admin.orders');
    Route::get('/products',[ProductController::class,'productList'])->name('admin.products');
    Route::get('/products/create',[ProductController::class,'productCreate'])->name('admin.products.create');
    Route::post('/products/store',[ProductController::class,'productStore'])->name('admin.products.store');

    // Category

    Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
    Route::get('/category/form',[CategoryController::class,'form'])->name('category.form');
    Route::post('/category/add',[CategoryController::class,'add'])->name('category.add');



    // Branch

    Route::get('/branch/add-branch',[BranchController::class,'create'])->name('branch.create');
    Route::post('/branch/add-branch',[BranchController::class,'store'])->name('branch.store');
    Route::get('/branch/branch-list',[BranchController::class,'list'])->name('branch.list');
    Route::get('/branch/search',[BranchController::class,'show'])->name('branch.show');

    Route::get('/branch/branch-list/View/{id}',[BranchController::class,'branchview'])->name('branch.view');
    Route::get('/branch/branch-list/Delete/{id}',[BranchController::class,'delete'])->name('branch.delete');
    Route::get('/branch/branch-list/Edit/{id}',[BranchController::class,'edit'])->name('branch.edit');
    Route::put('/branch/branch-list/update/{id}',[BranchController::class,'update'])->name('branch.update');

    // Staff
    Route::get('/branch/add-staff',[StaffController::class,'create'])->name('staff.create');
    Route::post('/branch/add-staff',[StaffController::class,'store'])->name('staff.store');
    Route::get('/branch/staff-list',[StaffController::class,'list'])->name('staff.list');

    // Parcel

    Route::get('/parcel',[ParcelController::class,'create'])->name('parcel.create');
     Route::post('/parcel',[ParcelController::class,'store'])->name('parcel.store');
     Route::get('/parcel-details',[ParcelController::class,'details'])->name('parcel.details');
     Route::get('/parcel/search',[ParcelController::class,'show'])->name('parcel.show');


     Route::get('/parcel-details/View/{id}',[ParcelController::class,'view'])->name('parcel.view');
     Route::get('/parcel/parcel-details/Edit/{id}',[ParcelController::class,'edit'])->name('parcel.edit');
     Route::put('/parcel/parcel-details/update/{id}',[ParcelController::class,'update'])->name('parcel.update');
     Route::get('/parcel/parcel-details/Delete/{id}',[ParcelController::class,'delete'])->name('parcel.delete');


     Route::get('/booking parcel',[BookingController::class,'view'])->name('booking.parcel.list');

     Route::get('/booking parcel/approve/{id}',[BookingController::class,'edit'])->name('booking.parcel.approve');
     Route::put('/booking parcel/approve/{id}',[BookingController::class,'update'])->name('booking.parcel.update');
     Route::get('/booking parcel/search',[BookingController::class,'show'])->name('booking.parcel.show');
     Route::get('/booking parcel/View/{id}',[BookingController::class,'viewbooking'])->name('booking.parcel.view');

     //  Track

     Route::get('/track',[TrackController::class,'create'])->name('track.create');
     Route::post('/track',[TrackController::class,'store'])->name('track.store');
     Route::get('/UserTrack/search',[UserTrackController::class,'show'])->name('user.tracking.show');

    //  Admin

     Route::get('/admin',[AdminController::class,'adminForm'])->name('admin.form');
     Route::post('/admin',[AdminController::class,'store'])->name('admin.store');
     Route::get('admin/user-list',[AdminController::class,'list'])->name('user.list');

     Route::get('/admin/user-list/Delete/{id}',[AdminController::class,'delete'])->name('user.delete');
     Route::get('admin/user-list/View/{id}',[AdminController::class,'view'])->name('user.view');
     Route::get('admin/search',[AdminController::class,'show'])->name('user.show');

    // Customer

    Route::get('/customer/customer-info',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/customer/customer-info',[CustomerController::class,'store'])->name('customer.store');
    Route::get('/customer/customer-list',[CustomerController::class,'list'])->name('customer.list');

    Route::get('/customer/customer-list/Delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
    Route::get('/customer/customer-list/Edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::put('/customer/customer-list/Update/{id}',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/customer/customer-list/View/{id}',[CustomerController::class,'view'])->name('customer.view');

   //Payment
     Route::get('/page/payment-status/add payment/{id}',[PaymentController::class,'edit'])->name('payment.status.create');
    Route::post('/page/payment-status/add payment',[PaymentController::class,'store'])->name('payment.status.store');

});
