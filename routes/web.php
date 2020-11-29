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
Route::get('/',function (){
    return view('frontsite.photo');})->name('frontsite.photo');
Route::get('/about',function (){
    return view('frontsite.about');})->name('frontsite.about');

Route::get('/videos',function (){
    return view('frontsite.videos');})->name('frontsite.videos');
Route::get('/contact',function (){
    return view('frontsite.contact');})->name('frontsite.contact');

Route::get('/admin',function (){
    return view('dashboard.layouts.admin');})->name('dashboard.layout.admin');
Route::get('/admin/add',function (){
    return view('dashboard.layouts.add_projects');})->name('dashboard.layout.admin.create');
Route::get('/admin/users',function (){
    return view('dashboard.layouts.users');})->name('dashboard.layout.admin.users');
