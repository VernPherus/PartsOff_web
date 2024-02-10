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

Route::get('/login', function(){
    return view('login');
});

Route::get('/cart', function(){
    return view('cart');
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

Route::get('/myacc_profile', function(){
    return view('myacc_profile');
});

Route::get('/myacc_changepass', function(){
    return view('myacc_changepass');
});

Route::get('/myacc_payment', function(){
    return view('myacc_payment');
});

Route::get('/shop_dashboard', function(){
    return view('shop_dashboard');
});

Route::get('/shop_order', function(){
    return view('shop_order');
});

Route::get('/shop_product', function(){
    return view('shop_product');
});

Route::get('/shop_profile', function(){
    return view('shop_profile');
});

Route::get('/shop_signup', function(){
    return view('shop_signup');
});

Route::get('/shop_change', function(){
    return view('shop_change');
});






