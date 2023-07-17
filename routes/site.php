<?php

use App\Http\Controllers\Site\CourseController;
use App\Http\Controllers\Site\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\HomeController;



Route::get('/',[HomeController::class,'home'])->middleware('visits_counter')->name('home');

Route::prefix('/ar')->middleware('visits_counter')->name('site.ar.')->group(function (){
    Route::get('/jadwa/{page}',[HomeController::class,'indexAR'])->name('index');
    Route::get('/news',[NewsController::class,'indexAR'])->name('news');
    Route::get('/blogs',[BlogController::class,'indexAR'])->name('blog');
    Route::get('/courses',[CourseController::class,'indexAR'])->name('course');
    Route::get('/news/{news:slug}',[NewsController::class,'showAR'])->name('news.show');
    Route::get('/blog/{blog:slug}',[BlogController::class,'showAR'])->name('blog.show');
    Route::get('/course/{course:slug}',[CourseController::class,'showAR'])->name('course.show');

});

Route::prefix('/en')->middleware('visits_counter')->name('site.en.')->group(function (){
    Route::get('/jadwa/{page}',[HomeController::class,'indexEN'])->name('index');
    Route::get('/news',[NewsController::class,'indexEN'])->name('news');
    Route::get('/blogs',[BlogController::class,'indexEN'])->name('blog');
    Route::get('/courses',[CourseController::class,'indexEN'])->name('course');
    Route::get('/news/{news:slug}',[NewsController::class,'showEN'])->name('news.show');
    Route::get('/blog/{blog:slug}',[BlogController::class,'showEN'])->name('blog.show');
    Route::get('/course/{course:slug}',[CourseController::class,'showEN'])->name('course.show');
});


