<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search-product', [HomeController::class, 'searchProduct'])->name('search-product');


Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/compare', [HomeController::class, 'compare'])->name('compare');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/deals', [HomeController::class, 'deals'])->name('deals');
Route::get('/demo', [HomeController::class, 'demo'])->name('demo');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/product_single/{id}', [HomeController::class, 'product_single'])->name('product_single');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/recent_view', [HomeController::class, 'recent_view'])->name('recent_view');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::post('/get-wishlist', [HomeController::class, 'getWishlist'])->name('get-wishlist');
Route::post('/get-cart', [HomeController::class, 'getcartlist'])->name('get-cartlist');
Route::post('/addToWishlist/{productId}', [HomeController::class, 'addToWishlist'])->name('addToWishlist');
Route::post('/addcart/{productId}', [HomeController::class, 'addcart'])->name('addcart');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/order_sucess', [HomeController::class, 'order_sucess'])->name('order_sucess');
Route::get('/my_order', [HomeController::class, 'my_order'])->name('my_order');
Route::get('/terms_condation', [HomeController::class, 'terms_condation'])->name('terms_condation');
Route::get('/sd_policy', [HomeController::class, 'sd_policy'])->name('sd_policy');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/returns', [HomeController::class, 'returns'])->name('returns');
Route::get('/responsible_disclosure_policy', [HomeController::class, 'responsible_disclosure_policy'])->name('responsible_disclosure_policy');


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    //users

    Route::resource('users', UserController::class);
    Route::get('change/password', [App\Http\Controllers\SettingController::class, 'change_password'])->name('change.password');
    Route::post('update/password', [App\Http\Controllers\SettingController::class, 'update_password'])->name('update.password');
    Route::post('change/profile_picture', [App\Http\Controllers\SettingController::class, 'change_profile_picture'])->name('change.profile_picture');
});
