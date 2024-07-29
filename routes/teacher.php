<?php

use App\Http\Controllers\Teacher\{AuthController,
    HomeController,

};
use Illuminate\Support\Facades\Route;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/teacher',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {


    Route::get('login', [AuthController::class, 'loginView'])->name('teacher.login');
    Route::post('login', [AuthController::class, 'postLogin'])->name('teacher.postLogin');

});



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/teacher',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'teacher']
    ], function() {


    Route::group([ 'middleware' => 'teacher', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ], function () {

        Route::get('/', [HomeController::class, 'index'])->name('teacher.index');
        Route::get('calender', [HomeController::class, 'calender'])->name('teacher.calender');
        Route::get('getMyStudents', [HomeController::class, 'getMyStudents'])->name('teacher.getMyStudents');
        Route::get('getReviewForMyStudent/{id}', [HomeController::class, 'getReviewForMyStudent'])->name('teacher.getReviewForMyStudent');

        Route::get('logout', [AuthController::class, 'logout'])->name('teacher.logout');



        Route::resource('profile', \App\Http\Controllers\Teacher\ProfileController::class);


        Route::resource('my_students', \App\Http\Controllers\Teacher\MyStudentController::class);
        Route::get('getRoomForRow/{id}',[\App\Http\Controllers\Teacher\MyStudentController::class,'getRoomForRow'])->name('teacher.getRoomForRow');
        Route::get('getStudents/{row_id}/{room_id}',[\App\Http\Controllers\Teacher\MyStudentController::class,'getStudents'])->name('teacher.getStudents');

        Route::get('addReview',[\App\Http\Controllers\Teacher\MyStudentController::class,'addReview'])->name('teacher.addReview');
        Route::get('deleteReview',[\App\Http\Controllers\Teacher\MyStudentController::class,'deleteReview'])->name('teacher.deleteReview');


        ###  positive_calender ####
        Route::get('my_positive_calender',[\App\Http\Controllers\Teacher\CalenderController::class,'positive_calender'])->name('admin.my_positive_calender');
        Route::get('my_positive_calender_counter',[\App\Http\Controllers\Teacher\CalenderController::class,'positive_calender_counter'])->name('admin.my_positive_calender_counter');

        ### negative_calender ###

        Route::get('my_negative_calender',[\App\Http\Controllers\Teacher\CalenderController::class,'negative_calender'])->name('admin.my_negative_calender');

        Route::get('my_negative_calender_counter',[\App\Http\Controllers\Teacher\CalenderController::class,'negative_calender_counter'])->name('admin.my_negative_calender_counter');

        ### Student ####

        Route::resource('teacher_students', \App\Http\Controllers\Teacher\StudentController::class);

        Route::get('createExamForStudent/{id}',[\App\Http\Controllers\Teacher\StudentController::class,'createExamForStudent'])->name('teacher.createExamForStudent');
        Route::post('createExamForStudents/{id}',[\App\Http\Controllers\Teacher\StudentController::class,'createExamForStudents'])->name('teacher.createExamForStudents');

        #### exam Students ###

        Route::resource('exam_students', \App\Http\Controllers\Teacher\ExamStudentController::class);


        ### Teacher Student Exams ###

        Route::resource('teacher_student_exams', \App\Http\Controllers\Teacher\TeacherStudentExamController::class);
        Route::post('teacher_students_exams_store',[\App\Http\Controllers\Teacher\TeacherStudentExamController::class,'teacher_students_exams_store'])->name('teacher.teacher_students_exams_store');


    });

});
