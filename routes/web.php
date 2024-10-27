<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;




// ********************home******************************
Route::get('/', function () {
    return view('home.welcome');
});
Route::get('/home-02', function () {
    return view('home.home-02');
});
Route::get('/home-03', function () {
    return view('home.home-03');
});

// ********************product******************************
Route::get('/product', function () {
    return view('products.product');
});
Route::get('/product-detail', function () {
    return view('products.product-detail');
});

// ********************shoping******************************
Route::get('/shoping-cart', function () {
    return view('shoping.shoping-cart');
});

// ********************blog******************************
Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/blog-detail', function () {
    return view('blog.blog-detail');
});

// ********************about******************************
Route::get('/about', function () {
    return view('about.about');
});

// ********************contact******************************
Route::get('/contact', function () {
    return view('contact.contact');
});

// ********************login******************************
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login_trait',[LoginController::class,'login_trait']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/register',[RegisterController::class,'register']);
Route::post('/ajoute_register',[RegisterController::class,'ajoute_register']);
Route::get('forgot-password', [ForgotPasswordController::class, 'forgotpassword'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
// ********************admin******************************
Route::middleware('auth')->group(function(){
Route::get('/index-admin', function () {
    return view('admin.admin-layout.dashbord');
});
Route::get('//Ecommerce_dash', function () {
    return view('admin.admin-layout.ecomdash');
});
// ********************profile******************************
Route::get('/profile', function () {
    return view('admin.profile.profile');
});
Route::get('/notification', function () {
    return view('admin.profile.notification');
});
Route::get('/connections', function () {
    return view('admin.profile.connections');
});
// ********************settings******************************
Route::get('/settings', function () {
    return view('admin.settings.settings');
});
Route::get('/Billing', function () {
    return view('admin.settings.Billing');
});
// ********************admin-product******************************
Route::get('/product-admin', function () {
    return view('admin.product.product-admin');
});
Route::get('/add_product', function () {
    return view('admin.product.add_product');
});
Route::get('/category', function () {
    return view('admin.product.category');
});
// ********************Order******************************
Route::get('/order', function () {
    return view('admin.order.order');
});
Route::get('/order_detail', function () {
    return view('admin.order.order_detail');
});
// ********************logistics******************************
Route::get('/logistics', function () {
    return view('admin.logistics.logistics');
});
Route::get('/dash_logi', function () {
    return view('admin.logistics.dashlogi');
});
// ********************clients******************************
Route::get('/clients',[ClientController::class,'client'])->name('clients');
Route::get('/add_client',[ClientController::class,'add_client'])->name('add_client');
Route::post('/store',[ClientController::class,'store'])->name('store');
Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
// ********************emails******************************
Route::get('/emails', function () {
    return view('admin.emails.emails');
});
});
