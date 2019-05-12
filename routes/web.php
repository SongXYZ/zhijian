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
    return view('home');
});

Route::any('/user', 'PlantController@userInfo');
Route::any('/plant', 'PlantController@plantInfo');
Route::any('/viewspot', 'PlantController@viewSpotInfo');
Route::any('/discuss', 'PlantController@discussInfo');
Route::any('/expand', 'PlantController@expandPlantInfo');

// Route::any('/user/login','UserController@login');
// Route::any('/user/pk','UserController@pk');

Route::get('/foo1', function () {
    return 'Hello World';
});

# 指定多个请求方式
Route::match(['get', 'post'], '/foo2', function () {
    return 'Hello match';
});

# 任意请求方式
Route::any('/foo3', function () {
    return 'Hello any';
});

# 直接返回试图（路由，试图名，[参数]）
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);




