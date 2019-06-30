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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('master','PageController@master')->name('master');
Route::get('index','PageController@index')->name('index');
Route::get('product','ProductController@product')->name('product');
Route::get('news','NewController@news')->name('news');
Route::get('news/{id}','NewController@detail')->name('detail_news');
Route::get('product/{id}','ProductController@detail')->name('detailproduct');

// admin
Route::get('admin/product','AdminContronller@admin');
Route::get('admin/product/add','AdminContronller@getaddproduct');
Route::post('admin/product/add','AdminContronller@postaddproduct')->name('addproduct');
Route::get('admin/product/edit/{id}','AdminContronller@geteditproduct');
Route::post('admin/product/edit/{id}','AdminContronller@posteditproduct')->name('editproduct');
Route::get('admin/product/delete/{id}','AdminContronller@deleteproduct')->name('deleteproduct');
// slide
Route::get('admin/slide','AdminContronller@slide');
Route::get('admin/slide/add','AdminContronller@getaddslide');
Route::post('admin/slide/add','AdminContronller@postaddslide')->name('addslide');
Route::get('admin/slide/edit/{id}','AdminContronller@geteditslide');
Route::post('admin/slide/edit/{id}','AdminContronller@posteditslide')->name('editslide');
Route::get('admin/slide/delete/{id}','AdminContronller@deleteslide')->name('deleteslide');
//news
Route::get('admin/news','AdminContronller@news');
Route::get('admin/news/add','AdminContronller@getaddnews');
Route::post('admin/news/add','AdminContronller@postaddnews')->name('addnews');
Route::get('admin/news/edit/{id}','AdminContronller@geteditnews');
Route::post('admin/news/edit/{id}','AdminContronller@posteditnews')->name('editnews');
Route::get('admin/news/delete/{id}','AdminContronller@deletenews')->name('deletenews');