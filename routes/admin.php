<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PollsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ExpertController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\TaskController;

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class,'home']);
    Route::resource('users', UsersController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('experts', ExpertController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('news', NewsController::class);
    Route::resource('polls', PollsController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('packages', PackageController::class);
    Route::resource('tasks', TaskController::class);
    Route::get('/file',[ExpertController::class,'file'])->name('file');
    Route::get('/{page}',[AdminController::class,'index'])->name('index');
});
