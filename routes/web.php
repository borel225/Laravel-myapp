<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::controller(HomeController::class)->group(function(){

    Route::get('/','home')->name('app_home');
    Route::get('/about','about')->name('app_about');
    Route::match(['get','post'],'/home','home')->middleware('auth')->name('home');
    Route::match(['get','post'],'/createMission','createMission')->name('app_createMission');
});


Route::controller(LoginController::class)->group(function()
{

    Route::get('/logout','logout')->name('app_logout');
    Route::post('/exist_email','existEmail')->name('app_existEmail');
    Route::match(['get','post'],'/forgot_password','forgotPassword')->name('app_forgotPassword');

});


//Route::get('/', [HomeController::class,'home'])->name('app_home');

//Route::get('/about',[HomeController::class,'about'])->name('app_about');

//Route::match(['get','post'], '/dashboard', [HomeController::class, 'dashboard'])
//->middleware('auth') /*la page est accessible seulement pour les utilisateur authentifier*/
//->name('app_dashboard');

//Route::get('/logout',[LoginController::class,'logout'])->name('app_logout');

//Route::post('/exist_email',[LoginController::class, 'existEmail'])->name('app_existEmail');
