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
Route::get('/',function(){
    return view("index");
});
Route::get('/index',function(){
    return view("index");
});
Route::get('/about_as',function(){
    return view("about_as");
});

Route::get('/contact',function(){
    return view("contact");
});
Route::get('/company',function(){
    return view("company");
});
Route::get('/details_job',function(){
    return view("details_job");
});
Route::get('/information1',function(){
    return view("information1");
});

Route::get('/jobs',function(){
    return view("jobs");
});
Route::get('/login',function(){
    return view("login");
});
Route::get('/other_users',function(){
    return view("other_users");
});
Route::get('/service',function(){
    return view("service");
});

Route::get('/sign_up',function(){
    return view("sign_up");
});
Route::get('/user-prof',function(){
    return view("user-prof");
});