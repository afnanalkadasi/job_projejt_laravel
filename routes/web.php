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
Route::view('/','web.index')->name('index');
Route::view('/index','web.index')->name('index');
Route::view('/about_as','web.about_as')->name('about_as');
Route::view('/contact','web.contact')->name('contact');
Route::view('/company','web.company')->name('company');
Route::view('/details_job','web.details_job')->name('details_job');
Route::view('/information1','web.information1')->name('information1');
Route::view('/jobs','web.jobs')->name('jobs');
Route::view('/other_users','web.other_users')->name('other_users');
Route::view('/user-prof','web.user-prof')->name('user-prof');
Route::view('/service','web.service')->name('service');
Route::view('/login','auth.login')->name('login');
Route::view('/sign_up','auth.sign_up')->name('sign_up');