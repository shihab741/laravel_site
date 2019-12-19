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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'FrontEnd@index');
Route::get('/single/{slug}', 'FrontEnd@single');
Route::get('/category/{slug}', 'FrontEnd@category');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('home');


Route::group(['middleware'=>'AuthenticateMiddleware'], function(){

	/**
	 *
	 * Catetory routing
	 *
	 */
	Route::get('/dashboard/category/add', 'CategoryController@createCategory');
	Route::post('/dashboard/category/save', 'CategoryController@saveCategory');
	Route::get('/dashboard/category/manage', 'CategoryController@manageCategory');
	Route::get('/dashboard/category/edit/{id}', 'CategoryController@editCategory');
	Route::post('/dashboard/category/update', 'CategoryController@updateCategory');
	Route::get('/dashboard/category/delete/{id}', 'CategoryController@deleteCategory');


	/**
	 *
	 * Article routing
	 *
	 */
	Route::get('/dashboard/article/add', 'ArticleController@createArticle');
	Route::post('/dashboard/article/save', 'ArticleController@saveArticle');
	Route::get('/dashboard/article/manage', 'ArticleController@manageArticle');
	Route::get('/dashboard/article/edit/{id}', 'ArticleController@editArticle');
	Route::post('/dashboard/article/update', 'ArticleController@updateArticle');
	Route::get('/dashboard/article/delete/{id}', 'ArticleController@deleteArticle');

});