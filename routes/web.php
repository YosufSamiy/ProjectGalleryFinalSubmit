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
//Route::get('orm','Dashboard\PhotoController@orm');

//Route::get('/','FrontSiteController@showHome')->name('frontsite.photo');



//
//Route::get('videos','FrontSiteController@showVideo')->name('frontsite.videos');

//Route::get('login','AuthController@login')->name('login');
//Route::post('authenticate','AuthController@authenticate')->name('authenticate');
//Route::get('logout','AuthController@logout')->name('logout');

//Route::get('encrypt','usersController@encrypt')->name('frontsite.about');

Route::get('about','FrontSiteController@showabout')->name('frontsite.about');
//Route::get('about','PhotoController@showAbout')->name('frontsite.about');
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
//    Route::resource('admin/video','Dashboard\VideoController');//admmin


    Route::get('contact','ContactController@index')->name("contactshow");//get


});
Route::get('photo/detail/{id}','FrontsiteController@showPhotoDitels')->name("photo.detail");//admmin

Route::post('contact','Dashboard\ContactController@store')->name("sendcontact");//get



//Route::get('photo/edit/{id}','Dashboard\PhotoController@edit')->name("photo.edit");//admmin
//



Route::get('detail','FrontSiteController@showPhotoDitels')->name('detail');

Route::get('/','FrontSiteController@showPhoto')->name('frontsite.photo');
Route::get('videos','FrontSiteController@showVideo')->name('frontsite.videos');

//Route::resource('photo','Dashboard\PhotoController');

//Route::get('listPhoto','Dashboard\PhotoController@listPhoto');
//Route::get('showPhoto','Dashboard\PhotoController@showPhoto');
//Route::get('addPhoto','Dashboard\PhotoController@addPhoto');
//Route::get('deletPhoto','Dashboard\PhotoController@editPhoto');
//Route::get('editPhoto','Dashboard\PhotoController@listPhoto');
//Route::get('savePhoto','Dashboard\PhotoController@savePhoto');
//Route::get('saveEditPhoto','Dashboard\PhotoController@saveEditPhoto');

//Route::get('',function (){
//    return view('frontsite.photo');})->name('frontsite.photo');
//Route::get('/',function (){
//    return view('frontsite.photo');})->name('frontsite.photo');
//Route::get('video',function (){
//    return view('frontsite.video');})->name('frontsite.videos');
//Route::get('contact',function (){
//    return view('frontsite.contact');})->name('frontsite.contact');
//Route::get('about',function (){
//    return view('frontsite.about');})->name('frontsite.about');

//Route::get('/videos',function (){
//    return view('frontsite.videos');})->name('frontsite.videos');
//Route::get('/contact',function (){
//    return view('frontsite.contact');})->name('frontsite.contact');
//
//Route::get('/admin',function (){
//    return view('dashboard.layouts.admin');})->name('dashboard.layout.admin');
//
//Route::get('/admin/add',function (){
//    return view('dashboard.layouts.add_projects');})->name('dashboard.layout.admin.create');

Route::get('/admin/users',function (){
   return view('dashboard.layouts.users');})->name('dashboard.layout.admin.users');



//









//Route::get('/admin/video'{;})->name('dashboard.layout.projectVideo');

//Route::get('/project',function (){
//    return view('dashboard.layouts.project');})->name('dashboard.layout.project');

Route::post('admin/video','VideoController@index')->name('projectVideo');



//Route::get('admin/project','FrontSiteController@indexAdmin')->name('project');


//Route::get('detail/photo/{}', function() {return view('frontsite.photo-detail');})->name('detail');
Route::get('viwe', function()
{
    return view('frontsite.video-detail');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
