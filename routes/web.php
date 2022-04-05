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
Route::view('/job','web.jobs')->name('job');
Route::view('/other_users','web.other_users')->name('other_users');
Route::view('/user-prof','web.user-prof')->name('user-prof');
Route::view('/service','web.service')->name('service');
Route::view('/login','auth.login')->name('login');
Route::view('/sign_up','auth.sign_up')->name('sign_up');


        ///////////////////////// Start Seekers Dashboard /////////////////////////
        Route::view('/services','web.dashboard.seeker.services')->name('services');
        Route::view('/add_service','web.dashboard.seeker.add_service')->name('add_service');
        Route::view('/edit_service','web.dashboard.seeker.add_service')->name('add_service');
        Route::view('/companies','web.dashboard.seeker.companies')->name('companies');
        Route::view('/add_company','web.dashboard.seeker.add_company')->name('add_company');
        Route::view('/edit_company','web.dashboard.seeker.edit_company')->name('edit_company');
        Route::view('/jobs','web.dashboard.seeker.jobs')->name('jobs');
        Route::view('/add_job','web.dashboard.seeker.add_job')->name('add_job');
        Route::view('/edit_job','web.dashboard.seeker.edit_job')->name('edit_job');
        Route::view('/users','web.dashboard.seeker.users')->name('users');
        Route::view('/add_user','web.dashboard.seeker.add_user')->name('add_user');
        Route::view('/edit_user','web.dashboard.seeker.edit_user')->name('edit_user');

        
   
