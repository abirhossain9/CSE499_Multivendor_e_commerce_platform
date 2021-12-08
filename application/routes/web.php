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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\Frontend\PagesController@index')->name('home');
//user features
Route::get('/user-login','App\Http\Controllers\Frontend\PagesController@userLogin')->name('user.login');
Route::get('/user-register','App\Http\Controllers\Frontend\PagesController@userRegister')->name('user.register');
Route::get('/user-dashboard','App\Http\Controllers\Frontend\PagesController@userDashboard')->middleware(['auth','verified'])->name('user.dashboard');
Route::get('/user-edit-profile', 'App\Http\Controllers\Frontend\PagesController@editProfile')->middleware(['auth','verified'])->name('user.editdashboard');
Route::post('/user-update/{id}','App\Http\Controllers\Frontend\UserProfileController@update')->name('user.update');
//vendor features
Route::get('/vendor-shop-details', 'App\Http\Controllers\Frontend\PagesController@vendorShopDetails')->middleware(['auth','verified'])->name('vendor.shopdetails');
Route::get('/vendor-dashboard', 'App\Http\Controllers\Frontend\PagesController@vendorDashboard')->middleware(['auth','verified'])->name('vendor.dashboard');
Route::get('/vendor-edit-profile', 'App\Http\Controllers\Frontend\PagesController@editVendorProfile')->middleware(['auth','verified'])->name('vendor.editdashboard');
Route::get('/shop-dashboard/{id}', 'App\Http\Controllers\Frontend\PagesController@shopDashboard')->middleware(['auth', 'verified'])->name('shop.dashboard');
Route::get('/shop-edit-profile', 'App\Http\Controllers\Frontend\PagesController@editShop')->middleware(['auth', 'verified'])->name('shop.editdashboard');

//shop create
Route::post('/shop-create','App\Http\Controllers\Frontend\ShopController@store')->name('shop.store');


//shop index
Route::get('/shop-index', 'App\Http\Controllers\Frontend\ShopController@shopIndex')->name('shop.index');

//individual shop page
//Route::get('/individual-shop/{id}', 'App\Http\Controllers\Frontend\ShopController@individualShopPage')->name('individualshop.page');

//product details page
//Route::get('/product-details', 'App\Http\Controllers\Frontend\PagesController@productDetails')->name('product.details');

//vendor add product page
Route::get('/add-product', 'App\Http\Controllers\Frontend\ProductController@create')->name('add.product');
//vendor add product page
Route::post('/product-store','App\Http\Controllers\Frontend\ProductController@store')->name('product.store');
//shop products
Route::get('/shop-show-products/{id}','App\Http\Controllers\Frontend\ProductController@shop_products')->name('shop.allproducts');
Route::get('/shop-single-product/{id}','App\Http\Controllers\Frontend\ProductController@details')->name('shop.single');

//vendor manage product page
Route::get('/manage-product', 'App\Http\Controllers\Frontend\ProductController@manageProduct')->name('manage.product');

//user product cart page
Route::get('/cart-page', 'App\Http\Controllers\Frontend\CartController@cartIndex')->middleware(['auth', 'verified'])->name('cart.index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
// these routes are for backend

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
Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard', 'App\Http\Controllers\Backend\DashboardController@dashboard')->middleware(['auth','verified'])->name('dashboard');
     //this routes are for branch management
    Route::group(['prefix' => '/branch'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\BranchController@index')->name('branch.manage');
        Route::get('/create','App\Http\Controllers\Backend\BranchController@create')->name('branch.create');
        Route::post('/store','App\Http\Controllers\Backend\BranchController@store')->name('branch.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\BranchController@edit')->name('branch.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\BranchController@update')->name('branch.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\BranchController@destroy')->name('branch.destroy');
    });
    //this routes are for employee management
    Route::group(['prefix' => '/employee'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\EmployeeController@index')->name('employee.manage');
        Route::get('/create','App\Http\Controllers\Backend\EmployeeController@create')->name('employee.create');
        Route::post('/store','App\Http\Controllers\Backend\EmployeeController@store')->name('employee.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\EmployeeController@edit')->name('employee.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\EmployeeController@update')->name('employee.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\EmployeeController@destroy')->name('employee.destroy');
    });
    //this routes are for coupon management
    Route::group(['prefix' => '/coupon'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\CouponController@index')->name('coupon.manage');
        Route::get('/create','App\Http\Controllers\Backend\CouponController@create')->name('coupon.create');
        Route::post('/store','App\Http\Controllers\Backend\CouponController@store')->name('coupon.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\CouponController@edit')->name('coupon.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\CouponController@update')->name('coupon.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\CouponController@destroy')->name('coupon.destroy');
    });
    //this routes are for coupon management
    Route::group(['prefix' => '/banner'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\BannerController@index')->name('banner.manage');
        Route::get('/create','App\Http\Controllers\Backend\BannerController@create')->name('banner.create');
        Route::post('/store','App\Http\Controllers\Backend\BannerController@store')->name('banner.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\BannerController@edit')->name('banner.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\BannerController@update')->name('banner.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\BannerController@destroy')->name('banner.destroy');
    });
    //this routes are for user management
    Route::group(['prefix' => '/user'], function(){
        Route::get('/manage','App\Http\Controllers\Frontend\UserProfileController@index')->name('user.manage');
        // Route::get('/create','App\Http\Controllers\Frontend\UserProfileController@create')->name('user.create');
        // Route::post('/store','App\Http\Controllers\Frontend\UserProfileController@store')->name('user.store');
        Route::get('/edit/{id}','App\Http\Controllers\Frontend\UserProfileController@edit')->name('user.edit');
        Route::post('/update/by/admin/{id}','App\Http\Controllers\Frontend\UserProfileController@updateByAdmin')->name('user.update.admin');
        Route::post('/destroy/{id}','App\Http\Controllers\Frontend\UserProfileController@destroy')->name('user.destroy');
    });
    //this routes are for shop management
    Route::group(['prefix' => '/shop'], function () {
        Route::get('/manage', 'App\Http\Controllers\Frontend\ShopController@index')->name('shop.manage');
        // Route::get('/create','App\Http\Controllers\Frontend\ShopController@create')->name('shop.create');
        // Route::post('/store','App\Http\Controllers\Frontend\ShopController@store')->name('shop.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Frontend\ShopController@edit')->name('shop.edit');
        Route::post('/update/by/admin/{id}', 'App\Http\Controllers\Frontend\ShopController@updateByAdmin')->name('shop.update.admin');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Frontend\ShopController@destroy')->name('shop.destroy');
    });

    //this routes are for product management
    Route::group(['prefix' => '/product'], function () {
        Route::get('/manage', 'App\Http\Controllers\Frontend\PagesController@manageProduct')->name('product.manage');
        // Route::get('/create','App\Http\Controllers\Frontend\ShopController@create')->name('shop.create');
        // Route::post('/store','App\Http\Controllers\Frontend\ShopController@store')->name('shop.store');
        // Route::get('/edit/{id}', 'App\Http\Controllers\Frontend\ShopController@edit')->name('shop.edit');
        // Route::post('/update/by/admin/{id}', 'App\Http\Controllers\Frontend\ShopController@updateByAdmin')->name('shop.update.admin');
        // Route::post('/destroy/{id}', 'App\Http\Controllers\Frontend\ShopController@destroy')->name('shop.destroy');
    });


});
require __DIR__.'/auth.php';
