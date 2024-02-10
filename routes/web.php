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
    return view('home');
});

Route::get('/admin_dashboard', function(){
    return view('admin_dashboard');
});

Route::get('/admin_userdatabse', function(){
    return view('Admin/admin_userdatabase');
});

Route::get('/cart', function(){
    return view('cart');
});

Route::get('/product', function(){
    return view('product');
});

Route::get('/checkout', function(){
    return view('checkout');
});

Route::get('/admin_dashboard', function(){
    return view('Admin/admin_dashboard');
});

// Route::get('/admin_sellerdatabse', function(){
//     return view('Admin/admin_sellerdatabase');
// });

Route::get('/admin_userdatabase', function(){
    return view('Admin/admin_userdatabase');
});

Route::get('/myacc_order', function(){
    return view('myacc_order');
});

Route::get('/seller_product', function(){
    return view('seller_product');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::get('/user_changepass', function(){
    return view('user_changepass');
});

Route::get('/user_order', function(){
    return view('user_order');
});

Route::get('/user_profile', function(){
    return view('user_profile');
});

Route::get('/user_shipping', function(){
    return view('user_shipping');
});
