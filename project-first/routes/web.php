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
Route::get('index','PageController@index')->middleware('locale')->name('index');
Route::get('product','ProductController@product')->name('product');
Route::get('news','NewController@news')->name('news');
Route::get('news/{id}','NewController@detail')->name('detail_news');
Route::get('product/{id}','ProductController@detail')->name('detailproduct');
Route::get('lienhe','PageController@lienhe')->name('lienhe');
Route::get('thuonghieu','PageController@thuonghieu')->name('thuonghieu');
Route::get('timkiem','PageController@timkiem')->name('timkiem');
Route::get('change-language/{language}','PageController@changelanguage')->name('change-language');
// admin
Route::group(['prefix'=>'admin',],function(){
	Route::group(['prefix'=>'product'],function(){
		Route::get('/','AdminContronller@admin');	
		Route::get('/add','AdminContronller@getaddproduct');
		Route::post('/add','AdminContronller@postaddproduct')->name('addproduct');
		Route::get('/edit/{id}','AdminContronller@geteditproduct');
		Route::post('/edit/{id}','AdminContronller@posteditproduct')->name('editproduct');
		Route::get('/delete/{id}','AdminContronller@deleteproduct')->name('deleteproduct');
	});
// slide
	Route::group(['prefix'=>'slide'],function(){
		Route::get('/','AdminContronller@slide');
		Route::get('/add','AdminContronller@getaddslide');
		Route::post('/add','AdminContronller@postaddslide')->name('addslide');
		Route::get('/edit/{id}','AdminContronller@geteditslide');
		Route::post('/edit/{id}','AdminContronller@posteditslide')->name('editslide');
		Route::get('/delete/{id}','AdminContronller@deleteslide')->name('deleteslide');
	});
//news
	Route::group(['prefix'=>'news'],function(){
		Route::get('/','AdminContronller@news');
		Route::get('/add','AdminContronller@getaddnews');
		Route::post('/add','AdminContronller@postaddnews')->name('addnews');
		Route::get('/edit/{id}','AdminContronller@geteditnews');
		Route::post('/edit/{id}','AdminContronller@posteditnews')->name('editnews');
		Route::get('/delete/{id}','AdminContronller@deletenews')->name('deletenews');
	});
});