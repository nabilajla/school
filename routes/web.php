<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;


Auth::routes();

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('/', function () {
            return view('welcome');
        });


    Route::middleware(['auth' ])->group(function () {

        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
        Route::group(['namespace' , 'Grades'] , function () {
            Route::resource('/Grades', 'App\Http\Controllers\Grades\GradeController');
        });


    });
    });





