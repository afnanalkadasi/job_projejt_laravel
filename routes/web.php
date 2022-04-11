<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\SkillController;
use App\Http\Controllers\user\ExperienceController;
use App\Http\Controllers\user\CourseController;
use App\Http\Controllers\user\EducationController;

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\JobController;

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\SettingsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



// Route::group(['prefix' => LaravelLocalization::setLocale(),
//     'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){ //...
 
//     });
Route::view('/','front.index')->name('index');
Route::view('/index','front.index')->name('index');
Route::view('/about_as','front.about_as')->name('about_as');
Route::view('/contact','front.contact')->name('contact');
Route::view('/company','front.company')->name('company');
Route::view('/details_job','front.details_job')->name('details_job');
Route::view('/job','front.jobs')->name('job');
Route::view('-prof','front.user-prof')->name('user-prof');
Route::view('/service','front.service')->name('service');




        ///////////////////////// Start admins of admin Dashboard /////////////////////////
        Route::get('/generate_roles',[SettingsController::class,'generateRoles'])->name('generate_roles');

        Route::get('/users',[AuthController::class,'listAll'])->name('users');
        Route::view('/edit_user','admin.edit_user')->name('edit_user');
        Route::post('/save_user',[AuthController::class,'register'])->name('save_user');
        Route::get('/sign_up',[AuthController::class,'create'])->name('sign_up');
        Route::get('/login',[AuthController::class,'showLogin'])->name('login');
        Route::post('/do_login',[AuthController::class,'login'])->name('do_login');
        Route::get('/logout',[AuthController::class,'logout'])->name('logout');

  Route::group(['prefix'=>'admin'],function(){

          Route::group(['middleware'=>['auth','role:admin']],function(){
       
               
        Route::get('/categories',[CategoryController::class,'listAll'])->name('categories');
        Route::get('/add_category',[CategoryController::class,'create'])->name('add_category');
        Route::post('/save_category',[CategoryController::class,'store'])->name('save_category');
        Route::get('/edit_category/{cat_id}',[CategoryController::class,'edit'])->name('edit_category');
        Route::get('/toggle_category/{cat_id}',[CategoryController::class,'toggle'])->name('toggle_category');
        Route::post('/update_category/{cat_id}',[CategoryController::class,'update'])->name('update_category');

        Route::get('/services',[ServiceController::class,'listAll'])->name('services');
        Route::get('/add_service',[ServiceController::class,'create'])->name('add_service');
        Route::post('/save_service',[ServiceController::class,'store'])->name('save_service');
        Route::get('/edit_service/{service_id}',[ServiceController::class,'edit'])->name('edit_service');
        Route::get('/toggle_service/{service_id}',[ServiceController::class,'toggle'])->name('toggle_service');
        Route::post('/update_service/{service_id}',[ServiceController::class,'update'])->name('update_service');

        Route::get('/companies',[CompanyController::class,'listAll'])->name('companies');
        Route::get('/add_company',[CompanyController::class,'create'])->name('add_company');
        Route::post('/save_company',[CompanyController::class,'store'])->name('save_company');
        Route::get('/edit_company/{company_id}',[CompanyController::class,'edit'])->name('edit_company');
        Route::get('/toggle_company/{company_id}',[CompanyController::class,'toggle'])->name('toggle_company');
        Route::post('/update_company/{company_id}',[CompanyController::class,'update'])->name('update_company');

        Route::get('/jobs',[JobController::class,'listAll'])->name('jobs');
        Route::get('/add_job',[JobController::class,'create'])->name('add_job');
        Route::post('/save_job',[JobController::class,'store'])->name('save_job');
        Route::get('/edit_job/{job_id}',[JobController::class,'edit'])->name('edit_job');
        Route::get('/toggle_job/{job_id}',[JobController::class,'toggle'])->name('toggle_job');
        Route::post('/update_job/{job_id}',[JobController::class,'update'])->name('update_job');


      });  
  });     
       


        
        ///////////////////////// Start   user Dashboard /////////////////////////
  Route::group(['prefix'=>'user'],function(){

          Route::group(['middleware'=>['auth','role:user']],function(){
        
        //		Route::get('/list_categories',[CategoriesController::class,'index'])->name('list_categories');
          //Route::get('/add_category',[CategoriesController::class,'create'])->name('add_category');
          /*Route::get('/edit_category/{cat_id}',[CategoriesController::class,'edit'])->name('edit_category');
          Route::get('/toggle_category/{cat_id}',[CategoriesController::class,'toggle'])->name('toggle_category');
          Route::post('/save_category',[CategoriesController::class,'store'])->name('save_category');
          Route::post('/update_category/{cat_id}',[CategoriesController::class,'update'])->name('update_category');
        */
         
          Route::view('/user_profile','user.user_profile')->name('user_profile');
          
          Route::get('/skills',[SkillController::class,'listAll'])->name("skills");
          Route::get('/add_skill',[SkillController::class,'create'])->name('add_skill');
          Route::post('/save_skill',[SkillController::class,'store'])->name('save_skill');
          Route::get('/edit_skill/{skill_id}',[SkillController::class,'edit'])->name('edit_skill');
          Route::get('/toggle_skill/{skill_id}',[SkillController::class,'toggle'])->name('toggle_skill');
          Route::post('/update_skill/{skill_id}',[SkillController::class,'update'])->name('update_skill');
  

          Route::get('/experiences',[ExperienceController::class,'listAll'])->name('experiences');
          Route::get('/add_experience',[ExperienceController::class,'create'])->name('add_experience');
          Route::post('/save_experience',[ExperienceController::class,'store'])->name('save_experience');
          Route::get('/edit_experience/{experience_id}',[ExperienceController::class,'edit'])->name('edit_experience');
          Route::get('/toggle_experience/{experience_id}',[ExperienceController::class,'toggle'])->name('toggle_experience');
          Route::post('/update_experience/{experience_id}',[ExperienceController::class,'update'])->name('update_experience');

          Route::get('/courses',[CourseController::class,'listAll'])->name('courses');
          Route::get('/add_course',[CourseController::class,'create'])->name('add_course');
          Route::post('/save_course',[CourseController::class,'store'])->name('save_course');
          Route::get('/edit_course/{course_id}',[CourseController::class,'edit'])->name('edit_course');
          Route::get('/toggle_course/{course_id}',[CourseController::class,'toggle'])->name('toggle_course');
          Route::post('/update_course/{course_id}',[CourseController::class,'update'])->name('update_course');

          Route::get('/educations',[EducationController::class,'listAll'])->name('educations');
          Route::get('/add_education',[EducationController::class,'create'])->name('add_education');
          Route::post('/save_education',[EducationController::class,'store'])->name('save_education');
          Route::get('/edit_education/{education_id}',[EducationController::class,'edit'])->name('edit_education');
          Route::get('/toggle_education/{education_id}',[EducationController::class,'toggle'])->name('toggle_education');
          Route::post('/update_education/{education_id}',[EducationController::class,'update'])->name('update_education');
        });

  });