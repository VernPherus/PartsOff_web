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


Route::get('/home', function(){
    return view('home');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/cart', function(){
    return view('cart');
});

Route::get('/checkout', function(){
    return view('checkout');
});

Route::get('/order', function(){
    return view('order');
});

Route::get('/myproduct', function(){
    return view('myproduct');
});

Route::get('/myorder', function(){
    return view('myorder');
});

Route::get('/myaccount', function(){
    return view('myaccount');
});

Route::get('/checkout', function(){
    return view('checkout');
});

Route::get('/product', function(){
    return view('product');
});

Route::get('/signup', function(){
    return view('signup');
});





