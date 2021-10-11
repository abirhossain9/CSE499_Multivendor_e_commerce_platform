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

Route::get('/', function () {
    return view('welcome');
});

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

});
require __DIR__.'/auth.php';
