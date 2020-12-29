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


Route::get('about','FrontSiteController@showabout')->name('frontsite.about');
Route::get('contact','FrontSiteController@showContact')->name('frontsite.contact');

Route::namespace('Dashboard\\')->middleware('auth')->name('dashboard.')->prefix('admin/')->group(function (){
    Route::get('/dashboard',function (){
        return view('dashboard.layouts.admin');})->name('dashboard.layout.admin');
    Route::resource('photo','PhotoController');//admmin
    Route::resource('video','VideoController');//get
    Route::delete('video/delete/{id}','VideoController@destroy')->name("video.delete");//admmin
    Route::delete('photo/delete/{id}','PhotoController@destroy')->name("photo.delete");//admmin
    Route::get('addVideo',function (){
        return view('dashboard.layouts.add_Videoo');})->name('dashboard.layout.admin.createVideo');


    Route::get('contact','ContactController@index')->name("contactshow");//get


});
Route::get('photo/detail/{id}','FrontsiteController@showPhotoDitels')->name("photo.detail");//admmin

Route::post('contact','Dashboard\ContactController@store')->name("sendcontact");//get






Route::get('detail','FrontSiteController@showPhotoDitels')->name('detail');

Route::get('/','FrontSiteController@showPhoto')->name('frontsite.photo');
Route::get('videos','FrontSiteController@showVideo')->name('frontsite.videos');


Route::get('/admin/users',function (){
   return view('dashboard.layouts.users');})->name('dashboard.layout.admin.users');














Route::post('admin/video','VideoController@index')->name('projectVideo');


Route::get('viwe', function()
{
    return view('frontsite.video-detail');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
