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

Route::get('/', 'welcomeController@welcomepage')->name('welcome');
Route::get('/postad', 'postadController@postad')->name('');
Route::post('/postad/save', 'postadController@postadsave')->name('');
Route::get('/postad/manage/save/vue/abcd&kjhkhjkkhjnazmulHasan', 'postadController@postadManage');
Route::get('/profile/{name}', 'profileController@profilepostmanage')->name('');
Route::get('/profile/deletepost/{id}', 'profileController@profilepostdelete')->name('');
Route::get('/profile/profile-edit/{id}', 'profileController@profilepostedit')->name('');



Auth::routes();
//facebook socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'AuthenticateMiddleware'],function(){



});

