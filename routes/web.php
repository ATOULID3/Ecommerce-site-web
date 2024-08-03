<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.welcome');
});
Route::get('/home-02', function () {
    return view('home.home-02');
});
Route::get('/home-03', function () {
    return view('home.home-03');
});


Route::get('/product', function () {
    return view('products.product');
});
Route::get('/product-detail', function () {
    return view('products.product-detail');
});


Route::get('/shoping-cart', function () {
    return view('shoping.shoping-cart');
});


Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/blog-detail', function () {
    return view('blog.blog-detail');
});


Route::get('/about', function () {
    return view('about.about');
});


Route::get('/contact', function () {
    return view('contact.contact');
});
