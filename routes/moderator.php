<?php

use App\Http\Controllers\Moderator\{AuthController,
    HomeController,

};
use Illuminate\Support\Facades\Route;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/moderator',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {


    Route::get('login', [AuthController::class, 'loginView'])->name('moderator.login');
    Route::post('login', [AuthController::class, 'postLogin'])->name('moderator.postLogin');

});



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/moderator',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'moderator']
    ], function() {


    Route::group([ 'middleware' => 'moderator', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ], function () {

        Route::get('/', [HomeController::class, 'index'])->name('moderator.index');

        Route::get('logout', [AuthController::class, 'logout'])->name('moderator.logout');



        Route::resource('moderator_profile', \App\Http\Controllers\Moderator\ProfileController::class);



        Route::get('get_students', [\App\Http\Controllers\Moderator\StudentController::class,'get_students'])->name('moderator.get_students');


        Route::get('getRoomForRowForModerator/{id}',[\App\Http\Controllers\Moderator\StudentController::class,'getRoomForRowForModerator'])->name('moderator.getRoomForRowForModerator');
        Route::get('getStudents/{row_id}/{room_id}',[\App\Http\Controllers\Moderator\StudentController::class,'getStudents'])->name('teacher.getStudents');

        ### Students ###

        Route::resource('moderator_students', \App\Http\Controllers\Moderator\StudentController::class);

        Route::get('addAbsence',[\App\Http\Controllers\Moderator\StudentController::class,'addAbsence'])->name('moderator.addAbsence');
        Route::get('deleteAbsence',[\App\Http\Controllers\Moderator\StudentController::class,'deleteAbsence'])->name('moderator.deleteAbsence');





    });

});
