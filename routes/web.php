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
    return view('welcome');
});
Route::group(['prefix'=>'welcome'], function(){
    Route::get('morning', 'TestController@morning');
    Route::get('afternoon', 'TestController@afternoon');
    Route::get('evening', 'TestController@evening');
});
Route::group([
    'namespace'=> 'Backend',
    'prefix'=>'admin'
], function() {
    Route::group(['prefix'=>'product'], function(){
        Route::get('detail', 'ProductController@detail');
        Route::get('list', 'ProductController@list');
    });
});


