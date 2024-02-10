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


Route::get('/', function(){
    return view('user/home');
});

Route::get('/dashboard', function(){
    return view('Admin/dashboard');
});

Route::get('/order_receiver', function(){
    return view('Admin/order_receiver');
});

Route::get('/product_database', function(){
    return view('Admin/product_database');
});

Route::get('/user_database', function(){
    return view('Admin/user_database');
});

Route::get('/changepassword', function(){
    return view('auth/changepassword');
});

Route::get('/login', function(){
    return view('auth/login');
});

Route::get('/signup', function(){
    return view('auth/signup');
});

Route::get('/cart', function(){
    return view('user/cart');
});

Route::get('/checkout', function(){
    return view('user/checkout');
});

Route::get('/home', function(){
    return view('user/home');
});

Route::get('/order', function(){
    return view('user/order');
});

Route::get('/product', function(){
    return view('user/product');
});

Route::get('/profile', function(){
    return view('user/profile');
});

Route::get('/shipping', function(){
    return view('user/shipping');
});





