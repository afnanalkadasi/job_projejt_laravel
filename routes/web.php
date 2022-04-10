<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\SkillController;
use App\Http\Controllers\user\ExperienceController;
use App\Http\Controllers\user\CourseController;
use App\Http\Controllers\user\EducationController;


use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\AuthController;
// use App\Http\Controllers\admin\CategoryController;
// use App\Http\Controllers\admin\CategoryController;

use App\Http\Controllers\admin\SettingsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
// Route::group(['prefix' => LaravelLocalization::setLocale(),
//     'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){ //...
 
//     });
Route::view('/','front.index')->name('index');
Route::view('/index','front.index')->name('index');
Route::view('/about_as','front.about_as')->name('about_as');
Route::view('/contact','front.contact')->name('contact');
Route::view('/company','front.company')->name('company');
Route::view('/details_job','front.details_job')->name('details_job');
Route::view('/information1','front.information1')->name('information1');
Route::view('/job','front.jobs')->name('job');
Route::view('/other_users','front.other_users')->name('other_users');
Route::view('/user-prof','front.user-prof')->name('user-prof');
Route::view('/service','front.service')->name('service');
Route::view('/login','auth.login')->name('login');
Route::get('/sign_up',[AuthController::class,'create'])->name('sign_up');
Route::post('/save_user',[AuthController::class,'register'])->name('save_user');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/do_login',[AuthController::class,'login'])->name('do_login');

        ///////////////////////// Start admins of admin Dashboard /////////////////////////

      
        Route::view('/services','admin.services')->name('services');
        Route::view('/add_service','admin.add_service')->name('add_service');
        Route::view('/edit_service','admin.edit_service')->name('edit_service');
        Route::view('/companies','admin.companies')->name('companies');
        Route::view('/add_company','admin.add_company')->name('add_company');
        Route::view('/edit_company','admin.edit_company')->name('edit_company');
        Route::view('/jobs','admin.jobs')->name('jobs');
        Route::view('/add_job','admin.add_job')->name('add_job');
        Route::view('/edit_job','admin.edit_job')->name('edit_job');
        Route::view('/users','admin.users')->name('users');
        Route::view('/add_user','admin.add_user')->name('add_user');
        Route::view('/edit_user','admin.edit_user')->name('edit_user');


        Route::get('/admin/categories',[CategoryController::class,'listAll'])->name('categories');
        Route::get('/admin/add_category',[CategoryController::class,'create'])->name('add_category');
        Route::post('/admin/save_category',[CategoryController::class,'store'])->name('save_category');
        Route::view('/admin/edit_category','admin.edit_category')->name('edit_category');

        Route::get('/generate_roles',[SettingsController::class,'generateRoles'])->name('generate_roles');
     
        
        ///////////////////////// Start   user Dashboard /////////////////////////
          Route::view('/information','user.information')->name('information');
          
          Route::get('/user/skills',[SkillController::class,'listAll'])->name("skills");
          Route::get('/user/add_skill',[SkillController::class,'create'])->name('add_skill');
          Route::post('/user/save_skill',[SkillController::class,'store'])->name('save_skill');
          Route::view('/user/edit_skill','user.edit_skill')->name('edit_skill');

          Route::get('/user/experiences',[ExperienceController::class,'listAll'])->name('experiences');
          Route::get('/user/add_experience',[ExperienceController::class,'create'])->name('add_experience');
          Route::post('/user/save_experience',[ExperienceController::class,'store'])->name('save_experience');
          Route::view('/user/edit_experience','user.edit_experience')->name('edit_experience');

          Route::get('/user/courses',[CourseController::class,'listAll'])->name('courses');
          Route::get('/user/add_course',[CourseController::class,'create'])->name('add_course');
          Route::post('/user/save_course',[CourseController::class,'store'])->name('save_course');
          Route::view('/user/edit_course','user.edit_course')->name('edit_course');

          Route::get('/user/educations',[EducationController::class,'listAll'])->name('educations');
          Route::get('/user/add_education',[EducationController::class,'create'])->name('add_education');
          Route::post('/user/save_education',[EducationController::class,'store'])->name('save_education');
          Route::view('/user/edit_education','user.edit_education')->name('edit_education');