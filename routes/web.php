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
Route::view('/','web.admin.index')->name('index');
Route::view('/index','web.admin.index')->name('index');
Route::view('/about_as','web.admin.about_as')->name('about_as');
Route::view('/contact','web.admin.contact')->name('contact');
Route::view('/company','web.admin.company')->name('company');
Route::view('/details_job','web.admin.details_job')->name('details_job');
Route::view('/information1','web.admin.information1')->name('information1');
Route::view('/job','web.admin.jobs')->name('job');
Route::view('/other_users','web.admin.other_users')->name('other_users');
Route::view('/user-prof','web.admin.user-prof')->name('user-prof');
Route::view('/service','web.admin.service')->name('service');
Route::view('/login','auth.login')->name('login');
Route::view('/sign_up','auth.sign_up')->name('sign_up');


        ///////////////////////// Start Seekers of admin Dashboard /////////////////////////
    // Route::prefix('seeker')->group(function (){
      
        Route::view('/services','web.admin.dashboard.seeker.services')->name('services');
        Route::view('/add_service','web.admin.dashboard.seeker.add_service')->name('add_service');
        Route::view('/edit_service','web.admin.dashboard.seeker.edit_service')->name('edit_service');
        Route::view('/companies','web.admin.dashboard.seeker.companies')->name('companies');
        Route::view('/add_company','web.admin.dashboard.seeker.add_company')->name('add_company');
        Route::view('/edit_company','web.admin.dashboard.seeker.edit_company')->name('edit_company');
        Route::view('/jobs','web.admin.dashboard.seeker.jobs')->name('jobs');
        Route::view('/add_job','web.admin.dashboard.seeker.add_job')->name('add_job');
        Route::view('/edit_job','web.admin.dashboard.seeker.edit_job')->name('edit_job');
        Route::view('/users','web.admin.dashboard.seeker.users')->name('users');
        Route::view('/add_user','web.admin.dashboard.seeker.add_user')->name('add_user');
        Route::view('/edit_user','web.admin.dashboard.seeker.edit_user')->name('edit_user');
        Route::view('/categories','web.admin.dashboard.seeker.categories')->name('categories');
        Route::view('/add_category','web.admin.dashboard.seeker.add_category')->name('add_category');
        Route::view('/edit_category','web.admin.dashboard.seeker.edit_category')->name('edit_category');
        
    // });
          ///////////////////////// Start   user Dashboard /////////////////////////
          Route::view('/skills','web.user.skills')->name('skills');
          Route::view('/add_skill','web.user.add_skill')->name('add_skill');
          Route::view('/edit_skill','web.user.edit_skill')->name('edit_skill');
          Route::view('/experiences','web.user.experiences')->name('experiences');
          Route::view('/add_experience','web.user.add_experience')->name('add_experience');
          Route::view('/edit_experience','web.user.edit_experience')->name('edit_experience');
          Route::view('/educations','web.user.educations')->name('educations');
          Route::view('/add_education','web.user.add_education')->name('add_education');
          Route::view('/edit_education','web.user.edit_education')->name('edit_education');
          Route::view('/courses','web.user.courses')->name('courses');
          Route::view('/add_course','web.user.add_course')->name('add_course');
          Route::view('/edit_course','web.user.edit_course')->name('edit_course');