<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {

    Route::get('/login', 'Login')->name('login');

    Route::get('/register', 'Register')->name('register');

    Route::post('/register_user', 'Register_User')->name('register_user');

    Route::post('/login_user', 'Login_User')->name('login_user');

    Route::get('/logout', 'Logout')->name('logout');
});


Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'Index')->name('/');

    Route::get('/product_detail/{id}', 'Product_detail')->name('product_detail');

    Route::get('/filter/{id}', 'Filter')->name('filter');

    Route::post('/search', 'Search')->name('search');

    Route::get('/remove_cart/{id}', 'Remove_cart')->name('remove_cart');

    Route::get('/increase_cart/{id}', 'increase_cart')->name('increase_cart');

    Route::get('/minus_cart/{id}', 'minus_cart')->name('minus_cart');

    Route::get('/verifyPayment/{user_id}', 'VerifyPayment')->name('verifyPayment');

    Route::get('/paymentSuccess', 'PaymentSuccess')->name('paymentSuccess');

});



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::controller(AuthController::class)->group(function () {

        Route::get('/home', 'Login_redirect')->name('home');
    });

    Route::controller(HomeController::class)->group(function () {
    
        Route::post('/add_cart/{id}', 'Add_cart')->name('add_cart');
    
        Route::get('/view_cart', 'View_cart')->name('view_cart');
    
        Route::get('/order_history', 'Order_history')->name('order_history');
    
        Route::get('/proceed/{totalPrice}', 'Proceed')->name('proceed');
    
        Route::get('/payment', 'Payment')->name('payment');

    
    });
});


Route::middleware(['auth:sanctum', 'checkadmin', config('jetstream.auth_session'), 'verified',])->group(function () {


    Route::controller(AdminController::class)->group(function () {

        Route::get('/dashboard', 'Dashboard')->name('admin-dashboard');

        Route::get('/categories', 'Categories')->name('categories');

        Route::get('/add_categories', 'AddCategories')->name('add_categories');

        Route::post('/store_category', 'Store_category')->name('store_category');

        Route::get('/update_category/{id}', 'Update_category')->name('update_category');

        Route::get('/delete_category/{id}', 'Delete_category')->name('delete_category');

        Route::post('/update__category/{id}', 'Update__category')->name('update__category');

        Route::get('/products', 'Products')->name('products');

        Route::get('/add_products', 'Addproducts')->name('add_products');

        Route::post('/add__Products', 'Add__Products')->name('add__Products');

        Route::get('/update_product/{id}', 'Update_product')->name('update_product');

        Route::get('/delete_product/{id}', 'Delete_product')->name('delete_product');

        Route::post('/update__product/{id}', 'Update__product')->name('update__product');

        Route::get('/all-orders', 'Orders')->name('all-orders');

        Route::get('/payments', 'Payments')->name('payments');

        Route::get('/deliverd/{id}', 'Deliverd')->name('deliverd');

        Route::get('/get-user/{id}', 'Get_user')->name('get-user');

        Route::get('/all-users', 'All_user')->name('all-users');

        Route::get('/admin_users', 'Admin_users')->name('admin_users');

        Route::post('/store_admin', 'store_admin')->name('store_admin');

        Route::get('/add_admin', 'add_admin')->name('add_admin');

        Route::get('/utilities', 'Utilities')->name('utilities');

        Route::get('/delete_user/{id}', 'Delete_user')->name('delete_user');

        Route::post('/update_utility/{id}', 'update_utility')->name('update_utility');

    });
});
