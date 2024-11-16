<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\Product1Controller;
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
Route::get('/product1',[Product1Controller::class,'product1'])->name('product1');
Route::get('/product-detail/{id}',[Product1Controller::class,'detail_product'])->name('product1_detail');
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
// Route::get('//Ecommerce_dash', function () {
//     return view('admin.admin-layout.ecomdash');
// });
// ********************profile******************************
Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
Route::get('/connections',[ProfileController::class,'connections'])->name('connections');
Route::get('/notification',[ProfileController::class,'notification'])->name('notification');
// ********************settings******************************
Route::get('/settings', function () {
    return view('admin.settings.settings');
});
Route::get('/Billing', function () {
    return view('admin.settings.Billing');
});
// ********************admin-product******************************
Route::get('/product-admin',[ProductController::class,'product'])->name('product');
Route::get('/add_product',[ProductController::class,'add_product'])->name('product.add');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
// ********************category******************************
Route::get('/category',[CategoryController::class,'category'])->name('category');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
// ********************Order******************************
Route::get('/order',[OrderController::class,'order'])->name('order');
Route::get('/add_order',[OrderController::class,'add_order'])->name('add.order');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/order_detail/{id}',[OrderController::class,'order_detail'])->name('detail.order');
Route::delete('order/{order}', [OrderController::class, 'destroy'])->name('order.destroy');
// ********************logistics******************************
Route::get('/logistics',[LogisticController::class,'logistics'])->name('logistics');
Route::get('/dash_logi',[LogisticController::class,'dash_logistics'])->name('dash.logistics');
Route::get('/order/{id}/track', [LogisticController::class, 'show'])->name('order.track');
// ********************clients******************************
Route::get('/clients',[ClientController::class,'client'])->name('clients');
Route::get('/add_client',[ClientController::class,'add_client'])->name('add_client');
Route::post('/store/clients',[ClientController::class,'store'])->name('store.clients');
Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
// ********************invoices******************************
Route::get('/invoices',[InvoicesController::class,'invoices'])->name('invoices');
Route::get('/add_invoice',[InvoicesController::class,'add_invoice'])->name('invoice.add');
Route::post('/store',[InvoicesController::class,'store'])->name('invoices.store');
Route::get('/show_invoice/{id}',[InvoicesController::class,'show_invoice'])->name('show.invoice');
Route::get('/invoices/{id}/pdf', [InvoicesController::class, 'downloadPDF'])->name('invoices.downloadPDF');
Route::delete('invoice/{invoice}', [InvoicesController::class, 'destroy'])->name('invoice.destroy');
// ********************emails******************************
Route::get('/emails', function () {
    return view('admin.emails.emails');
});
});
