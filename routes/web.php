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
Route::get('/',function(){
    return view('home');
});
//材料主页
Route::get('/material','MaterialController@index');
//材料删除
Route::post('/material/del','MaterialController@del');
//材料添加
Route::match(['get','post'],'/material/add','MaterialController@add');
//修改材料
Route::match(['get','post'],'/material/update/{id}','MaterialController@update');

//产品首页
Route::get('/product','ProductController@index');
//产品添加页面
Route::match(['get','post'],'/product/add','ProductController@add');

//订单列表
Route::get('/order','OrderController@index');
