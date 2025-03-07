<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\Product1Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ShopingcartController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ImportController;

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
Route::get('/shoping-cart',[ShopingcartController::class,'shoping'])->name('shoping');
Route::post('/checkout', [ShopingcartController::class, 'store'])->name('checkout.store');

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
Route::get('/email/verify', [VerificationController::class, 'show'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('auth', 'signed')->name('verification.verify');
Route::post('/email/resend', [VerificationController::class, 'resend'])->middleware('auth')->name('verification.resend');
// ********************admin******************************
Route::middleware('auth','verified')->group(function(){
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
// ********************chat******************************
Route::get('/chat',[ChatController::class,'chat'])->name('chat');
Route::post('/chat/store', [ChatController::class, 'sendMessage'])->name('chat.store');
Route::post('/send-email', [ChatController::class, 'sendEmail'])->name('email.send');
// ********************payment******************************
Route::get('/payment',[PaymentController::class,'payment'])->name('payment');
Route::post('/admin/payment', [PaymentController::class, 'store'])->name('payment.store');
// *****************contact*********************************
Route::get('/contactUs',[ContactusController::class,'contact'])->name('contact.form');
// ********************reviews******************************
Route::get('/reviews',[ReviewController::class,'reviews'])->name('reviews');
Route::get('/add_review',[ReviewController::class,'add_review'])->name('add_review');
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.create');
// ********************notification******************************
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::get('/notifications/mark-as-read/{id}', [NotificationController::class, 'markAsRead'])->name('notifications.read');
Route::get('/notifications/mark-all-as-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.markAllAsRead');
// ********************imports******************************
Route::get('/imports', [ImportController::class, 'index'])->name('import');
// ********************emails******************************
Route::get('/emails', function () {
    return view('admin.emails.emails');
});
});
