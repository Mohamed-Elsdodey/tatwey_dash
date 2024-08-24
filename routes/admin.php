<?php

use App\Http\Controllers\Admin\{AuthController,
    HomeController,

};
use Illuminate\Support\Facades\Route;






Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/admin',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {


    Route::get('login', [AuthController::class, 'loginView'])->name('admin.login');
    Route::post('login', [AuthController::class, 'postLogin'])->name('admin.postLogin');

});



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/admin',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'admin']
    ], function() {


    Route::group([ 'middleware' => 'admin', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ], function () {
        Route::get('/', [HomeController::class, 'index'])->name('admin.index');
        Route::get('calender', [HomeController::class, 'calender'])->name('admin.calender');
        Route::get('getStudents', [HomeController::class, 'getStudents'])->name('admin.getStudents');
        Route::get('getReviewForStudent/{id}', [HomeController::class, 'getReviewForStudent'])->name('admin.getReviewForStudent');

        Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

        ### admins

        Route::resource('admins', \App\Http\Controllers\Admin\AdminController::class);
        Route::get('activateAdmin', [App\Http\Controllers\Admin\AdminController::class, 'activate'])->name('admin.active.admin');

        ### categories ###

        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);

        ### rows ####

        Route::resource('rows', \App\Http\Controllers\Admin\RowController::class);
        Route::get('/export-row-students/{id}', [\App\Http\Controllers\Admin\RowController::class,'exportToExcel'])->name('admin.exportRowStudents');

        Route::get('importRowStudent/{id}',[\App\Http\Controllers\Admin\RowController::class,'importRowStudent'])->name('admin.importRowStudent');
        Route::post('importRowStudents/{id}',[\App\Http\Controllers\Admin\RowController::class,'importRowStudents'])->name('admin.importRowStudents');

        ### Rooms ####

        Route::resource('rooms', \App\Http\Controllers\Admin\RoomController::class);


        ### Students ###

        Route::resource('students', \App\Http\Controllers\Admin\StudentController::class);
        Route::get('exportRoomStudent/{id}',[\App\Http\Controllers\Admin\StudentController::class,'exportRoomStudent'])->name('admin.exportRoomStudent');
        Route::get('importRoomStudent/{id}',[\App\Http\Controllers\Admin\StudentController::class,'importRoomStudent'])->name('admin.importRoomStudent');
        Route::post('importRoomStudents/{id}',[\App\Http\Controllers\Admin\StudentController::class,'importRoomStudents'])->name('admin.importRoomStudents');

        ### Teachers ###

        Route::resource('teachers', \App\Http\Controllers\Admin\TeacherController::class);

        Route::get('getRowsForTeacher/{id}',[\App\Http\Controllers\Admin\TeacherController::class,'getRowsForTeacher'])->name('admin.getRowsForTeacher');
        Route::get('getRoomForRow/{id}',[\App\Http\Controllers\Admin\TeacherController::class,'getRoomForRow'])->name('admin.getRoomForRow');
        Route::post('storeRowsForTeacher/{id}',[\App\Http\Controllers\Admin\TeacherController::class,'storeRowsForTeacher'])->name('admin.storeRowsForTeacher');



        ### setting
        Route::resource('settings', \App\Http\Controllers\Admin\SettingController::class);


        ### Student Reviews ###

        Route::resource('student_reviews', \App\Http\Controllers\Admin\StudentReviewController::class);


        ### bad_students ####


        Route::resource('bad_students', \App\Http\Controllers\Admin\BadStudentController::class);
        Route::get('getRoomsStudentForRow/{id}',[\App\Http\Controllers\Admin\BadStudentController::class,'getRoomsStudentForRow'])->name('admin.getRoomsStudentForRow');


        ###  positive_calender ####
        Route::get('positive_calender',[\App\Http\Controllers\Admin\CalenderController::class,'positive_calender'])->name('admin.positive_calender');
        Route::get('positive_calender_counter',[\App\Http\Controllers\Admin\CalenderController::class,'positive_calender_counter'])->name('admin.positive_calender_counter');

        ### negative_calender ###

        Route::get('negative_calender',[\App\Http\Controllers\Admin\CalenderController::class,'negative_calender'])->name('admin.negative_calender');

        Route::get('negative_calender_counter',[\App\Http\Controllers\Admin\CalenderController::class,'negative_calender_counter'])->name('admin.negative_calender_counter');


        ### best Students ###

        Route::resource('best_students', \App\Http\Controllers\Admin\BestStudentController::class);


        ### parents ###


        Route::resource('parents', \App\Http\Controllers\Admin\ParentController::class);
        Route::get('/export-parents', [\App\Http\Controllers\Admin\ParentController::class,'exportParents'])->name('export-parents');

        Route::get('importParent',[\App\Http\Controllers\Admin\ParentController::class,'importParent'])->name('admin.importParent');
        Route::post('importParents',[\App\Http\Controllers\Admin\ParentController::class,'importParents'])->name('admin.importParents');


        ### Parent Students  ###


        Route::resource('parent_students', \App\Http\Controllers\Admin\ParentStudentController::class);


       ### exams  ###

        Route::resource('exams', \App\Http\Controllers\Admin\ExamController::class);

        Route::get('/export-exams', [\App\Http\Controllers\Admin\ExamController::class,'export'])->name('admin.export-exams');

        Route::get('exam/showImportForm', [\App\Http\Controllers\Admin\ExamController::class,'showImportForm'])->name('admin.showImportForm');
        Route::post('exam/import', [\App\Http\Controllers\Admin\ExamController::class,'import'])->name('admin.import');


        ### moderators ###

        Route::resource('moderators', \App\Http\Controllers\Admin\ModeratorController::class);
        Route::get('activateModerator', [App\Http\Controllers\Admin\ModeratorController::class, 'activate'])->name('admin.active.moderator');

        Route::get('getRowsForModerator/{id}',[\App\Http\Controllers\Admin\ModeratorController::class,'getRowsForModerator'])->name('admin.getRowsForModerator');
        Route::post('storeRowsForModerator/{id}',[\App\Http\Controllers\Admin\ModeratorController::class,'storeRowsForModerator'])->name('admin.storeRowsForModerator');


        ### absences ###

        Route::resource('absences', \App\Http\Controllers\Admin\AbsenceController::class);


        ### notifications ###

        Route::resource('notifications', \App\Http\Controllers\Admin\NotificationController::class);
        Route::get('get_tuners_notification', [App\Http\Controllers\Admin\NotificationController::class, 'get_tuners_notification'])->name('admin.get_tuners_notification');
        Route::get('get_rooms_for_row/{id}', [App\Http\Controllers\Admin\NotificationController::class, 'get_rooms_for_row'])->name('admin.get_rooms_for_row');


        ###   Roles ###

        Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
        Route::get('permission_by_guard_name', [App\Http\Controllers\Admin\RoleController::class, 'permission_by_guard_name'])->name('admin.permission_by_guard_name');




        Route::get('/push-notificaiton', [\App\Http\Controllers\WebNotificationController::class, 'index'])->name('push-notificaiton');
        Route::post('/store-token', [\App\Http\Controllers\WebNotificationController::class, 'storeToken'])->name('store.token');
        Route::post('/send-web-notification', [\App\Http\Controllers\WebNotificationController::class, 'sendWebNotification'])->name('send.web-notification');



        ############################ Ahmed Tarek ########################################################
        Route::resource('questions', \App\Http\Controllers\Admin\QuestionController::class);
        Route::resource('teacher-report', \App\Http\Controllers\Admin\TeacherReportController::class);






    });

});
