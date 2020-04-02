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



Auth::routes();
//facebook socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin', 'adminController@postadinfo')->name('admin');
    Route::get('/payment', 'adminController@paymentinfo')->name('payment');
    Route::get('/admin-login', 'adminController@login')->name('admin-login');
    Route::get('/adminLogin', 'adminController@adminLogin')->name('adminLogin');
    Route::get('/edit/{id}', 'adminController@postadedit')->name('postad-edit');
    Route::post('/postupdate', 'adminController@postadupdate')->name('update');


});

Route::group(['middleware'=>'Rentplus'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/postad', 'postadController@postad')->name('');
    Route::post('/postad/save', 'postadController@postadsave')->name('');
    Route::get('/postad/search', 'postadController@postadsearch')->name('');
    Route::get('/postad/manage/save/vue/abcd&kjhkhjkkhjnazmulHasan', 'postadController@postadManage');
    Route::get('/profile/{name}', 'profileController@profilepostmanage')->name('');
    Route::get('/profile/deletepost/{id}', 'profileController@profilepostdelete')->name('');
    Route::get('/profile/profile-edit/{id}', 'profileController@profilepostedit')->name('');
    Route::post('/update/{id}', 'profileController@profilepostupdate')->name('');
    Route::get('/postadetails/{id}', 'postadController@postdetails')->name('');
    Route::get('/postad/search/all', 'postadController@postadsearchallpost')->name('searchresult');
    Route::get('/postad/likeconfirm', 'postadController@postadlike');
    Route::get('/postad/confirmdetails/{id}', 'postadController@postadconfirmdetails');
    Route::get('/postad/notification/{name}', 'postadController@postadnotification');
    Route::get('/chat/{name}', 'chatController@chatdata');
    Route::get('/chatlist/{name}', 'chatController@chatlist');
    Route::post('/massages/save', 'chatController@chatmassages')->name('');
    Route::post('/postad/save/payment', 'postadController@postadpayment')->name('');




});

