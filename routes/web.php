<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyDetailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CrowselController;
use App\Http\Middleware\admin_afterLogin;
use App\Http\Middleware\admin_beforLogin;

Route::get('/', [PropertyController::class, 'home']);

// ======== Website start =========
Route::get('/home', [PropertyController::class, 'homer']);

Route::get('/login', [UserController::class, 'index']);
Route::get('/signup', [UserController::class, 'create']);

Route::post('/inser_singup', [UserController::class, 'store']);
Route::post('/auth_login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'user_logout']);

// Forget Pass

Route::get('/forget_pass', [UserController::class, 'forget_pass']);
Route::get('/forget_otp', [UserController::class, 'showForgetOtpForm']);
Route::post('/forget_otp', [UserController::class, 'forget_otp']);


Route::get('/reset_pass', [UserController::class, 'reset_pass']);
Route::post('/reset_pass', [UserController::class, 'verify_otp']);

Route::post('/reset_pass/{id}', [UserController::class, 'update_pass']);




Route::get('/contact', [ContactController::class, 'index']);
Route::post('/insert_contact', [ContactController::class, 'store']);

Route::get('/villas', [PropertyController::class,'index']);

Route::get('/prop_details', [PropertyDetailController::class, 'index']);



// ======== Admin Start =======

Route::get('/admins', [AdminController::class, 'create'])->middleware('admin_after');
Route::post('/admin_login', [AdminController::class, 'admin_login'])->middleware('admin_after');



Route::middleware(['admin_befor'])->group(function () {
    
    Route::get('/admin_logout', [AdminController::class, 'admin_logout']);

    Route::get('/dashboard', [AdminController::class, 'dash']);

    Route::get('/dbtable', function () {
        return view('admin.datatables');
    });
    Route::get('/table', function () {
        return view('admin.tables');
    });
    Route::get('/starter', function () {
        return view('admin.starter-template');
    });

    Route::get('/forms', function () {
        return view('admin.forms');
    });


    // manage
    Route::get('/manage_propertyDetails', [PropertyDetailController::class, 'create']);
    Route::get('/manage_property', [PropertyController::class, 'manage']);
    Route::get('/manage_crowsel', [CrowselController::class, 'index']);


    // add

    Route::get('/add_croswel', [CrowselController::class, 'create']);

    Route::get('/add_property', [PropertyController::class, 'create']);
    Route::post('/add_property', [PropertyController:: class, 'store']);  

    Route::get('/add_propertyDetails', [PropertyDetailController::class, 'show']);  
    Route::post('/add_propertyDetails', [PropertyDetailController::class, 'store']);  


    //edit

    // Route::get('/edit_propertyDetails', [PropertyController::class, 'edit']);
    Route::get('/edit_propertyDetails/{id}', [PropertyDetailController::class, 'edit'])->name('edit_propertyDetails');
    Route::post('/update_propertyDetails/{id}', [PropertyDetailController::class, 'update'])->name('update_propertyDetails');



    // Delete

    Route::get('/delete_property/{id}', [PropertyController::class, 'destroy']);
    Route::get('/delete_propertyDetails/{id}', [PropertyDetailController::class, 'destroy']); 


});