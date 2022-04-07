<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\SkillController;
use App\Http\Controllers\user\ExperienceController;
use App\Http\Controllers\user\CourseController;
use App\Http\Controllers\user\EducationController;

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
Route::view('/sign_up','auth.sign_up')->name('sign_up');


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
        Route::view('/categories','admin.categories')->name('categories');
        Route::view('/add_category','admin.add_category')->name('add_category');
        Route::view('/edit_category','admin.edit_category')->name('edit_category');
        
        
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

          Route::view('/educations','user.educations')->name('educations');
          Route::view('/add_education','user.add_education')->name('add_education');
          Route::post('/user/save_experience',[ExperienceController::class,'store'])->name('save_experience');
          Route::view('/edit_education','user.edit_education')->name('edit_education');

          Route::view('/courses','user.courses')->name('courses');
          Route::view('/add_course','user.add_course')->name('add_course');
          Route::view('/edit_course','user.edit_course')->name('edit_course');