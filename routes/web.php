<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




/**
 * Home前端用户界面相关的路由
 */
Route::group(['namespace' => 'Home'], function () {
    // 首页
    Route::get('/', 'HomeController@index')->name('index');
    //服务宗旨
    Route::get('/service', 'HomeController@service')->name('service');
    // 公司动态
    Route::get('/company', 'HomeController@company')->name('company');
    // 产品展示
    Route::get('/product', 'HomeController@product')->name('product');
    // 合作案例
    Route::get('/cooperation', 'HomeController@cooperation')->name('cooperation');
    // 合作招商
    Route::get('/business', 'HomeController@business')->name('business');
    // 联系我们  (中英文 )
    Route::get('/concat', 'HomeController@concat')->name('concat');
});

/**
 * Home前端用户界面相关的路由
 */
Route::group(['namespace' => 'Admin'], function () {

    Route::any('dashboard', 'DashboardController@index')->name('dashboard');

});