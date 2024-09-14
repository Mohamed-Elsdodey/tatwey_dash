<?php


declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/




Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {



    Route::get('/', function () {
        return redirect()->route('admin.index');
    });


    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale() . '/admin',
            'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
        ],
        function () {



            Route::get('login', [App\Http\Controllers\Admin\AuthController::class, 'loginView'])->name('admin.login');
            Route::post('login', [App\Http\Controllers\Admin\AuthController::class, 'postLogin'])->name('admin.postLogin');
        }
    );



    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale() . '/admin',
            'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'admin']
        ],
        function () {


            Route::group(['middleware' => 'admin', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'], function () {

            
                Route::get('questions', function(){
                    return view('Admin.CRUDS.questions.index');
                })->name('admin.questions');


            
                Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.index');
                Route::get('calender', [App\Http\Controllers\Admin\HomeController::class, 'calender'])->name('admin.calender');
                Route::get('getStudents', [App\Http\Controllers\Admin\HomeController::class, 'getStudents'])->name('admin.getStudents');
                Route::get('getReviewForStudent/{id}', [App\Http\Controllers\Admin\HomeController::class, 'getReviewForStudent'])->name('admin.getReviewForStudent');

                Route::get('logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');

                ### admins

                Route::resource('admins', \App\Http\Controllers\Admin\AdminController::class);
                Route::get('activateAdmin', [App\Http\Controllers\Admin\AdminController::class, 'activate'])->name('admin.active.admin');

                ### categories ###

                Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);


                ### category Teachers 

                Route::resource('category_teachers', \App\Http\Controllers\Admin\CategoryTeacherController::class);
                Route::post('teacher_coordinator', [App\Http\Controllers\Admin\CategoryTeacherController::class, 'teacher_coordinator'])->name('admin.teacher_coordinator');



                ### rows ####


                Route::resource('rows', \App\Http\Controllers\Admin\RowController::class);
                Route::get('/export-row-students/{id}', [\App\Http\Controllers\Admin\RowController::class, 'exportToExcel'])->name('admin.exportRowStudents');
                Route::get('importRowStudent/{id}', [\App\Http\Controllers\Admin\RowController::class, 'importRowStudent'])->name('admin.importRowStudent');
                Route::post('importRowStudents/{id}', [\App\Http\Controllers\Admin\RowController::class, 'importRowStudents'])->name('admin.importRowStudents');

                ### Rooms ####

                Route::resource('rooms', \App\Http\Controllers\Admin\RoomController::class);


                ### Students ###

                Route::resource('students', \App\Http\Controllers\Admin\StudentController::class);
                Route::get('exportRoomStudent/{id}', [\App\Http\Controllers\Admin\StudentController::class, 'exportRoomStudent'])->name('admin.exportRoomStudent');
                Route::get('importRoomStudent/{id}', [\App\Http\Controllers\Admin\StudentController::class, 'importRoomStudent'])->name('admin.importRoomStudent');
                Route::post('importRoomStudents/{id}', [\App\Http\Controllers\Admin\StudentController::class, 'importRoomStudents'])->name('admin.importRoomStudents');

                ### Teachers ###

                Route::resource('teachers', \App\Http\Controllers\Admin\TeacherController::class);
                Route::get('getRowsForTeacher/{id}', [\App\Http\Controllers\Admin\TeacherController::class, 'getRowsForTeacher'])->name('admin.getRowsForTeacher');
                Route::get('getRoomForRow/{id}', [\App\Http\Controllers\Admin\TeacherController::class, 'getRoomForRow'])->name('admin.getRoomForRow');
                Route::post('storeRowsForTeacher/{id}', [\App\Http\Controllers\Admin\TeacherController::class, 'storeRowsForTeacher'])->name('admin.storeRowsForTeacher');

                Route::get('/exportTeachers', [\App\Http\Controllers\Admin\TeacherController::class, 'exportTeachers'])->name('admin.exportTeachers');

                Route::get('importTeacher', [\App\Http\Controllers\Admin\TeacherController::class, 'importTeacher'])->name('admin.importTeacher');
                Route::post('importTeachers', [\App\Http\Controllers\Admin\TeacherController::class, 'importTeachers'])->name('admin.importTeachers');




                ### setting
                Route::resource('settings', \App\Http\Controllers\Admin\SettingController::class);


                ### Student Reviews ###

                Route::resource('student_reviews', \App\Http\Controllers\Admin\StudentReviewController::class);


                ### bad_students ####


                Route::resource('bad_students', \App\Http\Controllers\Admin\BadStudentController::class);
                Route::get('getRoomsStudentForRow/{id}', [\App\Http\Controllers\Admin\BadStudentController::class, 'getRoomsStudentForRow'])->name('admin.getRoomsStudentForRow');


                ###  positive_calender ####
                Route::get('positive_calender', [\App\Http\Controllers\Admin\CalenderController::class, 'positive_calender'])->name('admin.positive_calender');
                Route::get('positive_calender_counter', [\App\Http\Controllers\Admin\CalenderController::class, 'positive_calender_counter'])->name('admin.positive_calender_counter');

                ### negative_calender ###

                Route::get('negative_calender', [\App\Http\Controllers\Admin\CalenderController::class, 'negative_calender'])->name('admin.negative_calender');

                Route::get('negative_calender_counter', [\App\Http\Controllers\Admin\CalenderController::class, 'negative_calender_counter'])->name('admin.negative_calender_counter');


                ### best Students ###

                Route::resource('best_students', \App\Http\Controllers\Admin\BestStudentController::class);


                ### parents ###


                Route::resource('parents', \App\Http\Controllers\Admin\ParentController::class);
                Route::get('/export-parents', [\App\Http\Controllers\Admin\ParentController::class, 'exportParents'])->name('export-parents');

                Route::get('importParent', [\App\Http\Controllers\Admin\ParentController::class, 'importParent'])->name('admin.importParent');
                Route::post('importParents', [\App\Http\Controllers\Admin\ParentController::class, 'importParents'])->name('admin.importParents');


                ### Parent Students  ###


                Route::resource('parent_students', \App\Http\Controllers\Admin\ParentStudentController::class);


                ### exams  ###

                Route::resource('exams', \App\Http\Controllers\Admin\ExamController::class);

                Route::get('/export-exams', [\App\Http\Controllers\Admin\ExamController::class, 'export'])->name('admin.export-exams');

                Route::get('exam/showImportForm', [\App\Http\Controllers\Admin\ExamController::class, 'showImportForm'])->name('admin.showImportForm');
                Route::post('exam/import', [\App\Http\Controllers\Admin\ExamController::class, 'import'])->name('admin.import');


                ### moderators ###

                Route::resource('moderators', \App\Http\Controllers\Admin\ModeratorController::class);
                Route::get('activateModerator', [App\Http\Controllers\Admin\ModeratorController::class, 'activate'])->name('admin.active.moderator');

                Route::get('getRowsForModerator/{id}', [\App\Http\Controllers\Admin\ModeratorController::class, 'getRowsForModerator'])->name('admin.getRowsForModerator');
                Route::post('storeRowsForModerator/{id}', [\App\Http\Controllers\Admin\ModeratorController::class, 'storeRowsForModerator'])->name('admin.storeRowsForModerator');
                Route::get('getRoomForRowForModerator/{id}', [\App\Http\Controllers\Admin\ModeratorController::class, 'getRoomForRowForModerator'])->name('admin.getRoomForRowForModerator');


                ### absences ###

                Route::resource('absences', \App\Http\Controllers\Admin\AbsenceController::class);


                ### notifications ###

                Route::resource('notifications', \App\Http\Controllers\Admin\NotificationController::class);
                Route::get('get_tuners_notification', [App\Http\Controllers\Admin\NotificationController::class, 'get_tuners_notification'])->name('admin.get_tuners_notification');
                Route::get('get_rooms_for_row/{id}', [App\Http\Controllers\Admin\NotificationController::class, 'get_rooms_for_row'])->name('admin.get_rooms_for_row');


                ###   Roles ###

                Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
                Route::get('permission_by_guard_name', [App\Http\Controllers\Admin\RoleController::class, 'permission_by_guard_name'])->name('admin.permission_by_guard_name');



                ### Reports ### 

                Route::resource('message_reports', \App\Http\Controllers\Admin\Reports\MessageReportController::class);


                Route::resource('teacher_reports', \App\Http\Controllers\Admin\Reports\TeacherReportController::class);


                Route::get('row_postive_review_reports', [\App\Http\Controllers\Admin\Reports\RowPostiveReviewReportController::class, 'index'])->name('row_postive_review_reports.index');
                Route::get('row_postive_review_rooms_data', [\App\Http\Controllers\Admin\Reports\RowPostiveReviewReportController::class, 'row_postive_review_rooms_data'])->name('row_postive_review_reports.row_postive_review_rooms_data');
                Route::get('row_postive_review_students_data', [\App\Http\Controllers\Admin\Reports\RowPostiveReviewReportController::class, 'row_postive_review_students_data'])->name('row_postive_review_reports.row_postive_review_students_data');


                Route::get('row_negative_review_reports', [\App\Http\Controllers\Admin\Reports\RowNegativeReviewReportController::class, 'index'])->name('row_negative_review_reports.index');
                Route::get('row_negative_review_rooms_data', [\App\Http\Controllers\Admin\Reports\RowNegativeReviewReportController::class, 'row_negative_review_rooms_data'])->name('row_negative_review_reports.row_negative_review_rooms_data');
                Route::get('row_negative_review_students_data', [\App\Http\Controllers\Admin\Reports\RowNegativeReviewReportController::class, 'row_negative_review_students_data'])->name('row_negative_review_reports.row_negative_review_students_data');



                Route::resource('general_student_reports', \App\Http\Controllers\Admin\Reports\GeneralStudentReportController::class);
                Route::get('general_student_report_filter', [\App\Http\Controllers\Admin\Reports\GeneralStudentReportController::class, 'general_student_report_filter'])->name('general_student_report_filter');


                Route::resource('registration_authorities_reports', \App\Http\Controllers\Admin\Reports\RegistrationAuthoritiesReportController::class);
                Route::get('registeration_filter', [\App\Http\Controllers\Admin\Reports\RegistrationAuthoritiesReportController::class, 'registeration_filter'])->name('registeration.filter');



                Route::resource('negative_review_reports', \App\Http\Controllers\Admin\Reports\NegativeReviewReportController::class);
                Route::get('get_room_by_row_id', [\App\Http\Controllers\Admin\Reports\NegativeReviewReportController::class, 'get_room_by_row_id'])->name('admin.get_room_by_row_id');
                Route::get('get_teacher_by_category_id', [\App\Http\Controllers\Admin\Reports\NegativeReviewReportController::class, 'get_teacher_by_category_id'])->name('admin.get_teacher_by_category_id');


                Route::resource('postive_review_reports', \App\Http\Controllers\Admin\Reports\PostiveReviewReportController::class);



                ### Administrations
                Route::resource('administrations', \App\Http\Controllers\Admin\AdministrationController::class);
                Route::get('activateAdministration', [App\Http\Controllers\Admin\AdministrationController::class, 'activate'])->name('admin.active.administration');

                #### Standard Sections 

                Route::resource('standard_sections', \App\Http\Controllers\Admin\StandardSectionController::class);
                Route::post('updateStandardSectionRank', [App\Http\Controllers\Admin\StandardSectionController::class, 'updateStandardSectionRank'])->name('admin.updateStandardSectionRank');
                Route::post('activateSection', [App\Http\Controllers\Admin\StandardSectionController::class, 'activate'])->name('admin.activateSection');


                #### Standards 
                Route::resource('standards', \App\Http\Controllers\Admin\StandardController::class);
                Route::post('updateStandardRank', [App\Http\Controllers\Admin\StandardController::class, 'updateStandardRank'])->name('admin.updateStandardRank');
                Route::post('activateStandard', [App\Http\Controllers\Admin\StandardController::class, 'activate'])->name('admin.activateStandard');

                ### days 
                Route::resource('days', controller: \App\Http\Controllers\Admin\DayController::class);
                Route::post('activateDay', [App\Http\Controllers\Admin\DayController::class, 'activate'])->name('admin.active.day');

                ### Sessions 

                Route::resource(name: 'sessions', controller: \App\Http\Controllers\Admin\SessionController::class);
                Route::post('activateSession', [App\Http\Controllers\Admin\SessionController::class, 'activate'])->name('admin.active.session');

                ### schedules  
                Route::resource(name: 'schedules', controller: \App\Http\Controllers\Admin\ScheduleController::class);
                Route::get('getGeneralRoomForRow', [App\Http\Controllers\Admin\ScheduleController::class, 'getGeneralRoomForRow'])->name('admin.getGeneralRoomForRow');
                Route::post('add_category_to_schedule', [App\Http\Controllers\Admin\ScheduleController::class, 'addCategoryToSchedule'])->name(name: 'admin.addCategoryToSchedule');
                Route::post('delete_category_from_schedule', [App\Http\Controllers\Admin\ScheduleController::class, 'deleteCategoryFromSchedule'])->name(name: 'admin.deleteCategoryFromSchedule');


                





                ### Test
                Route::get('/push-notificaiton', [\App\Http\Controllers\WebNotificationController::class, 'index'])->name('push-notificaiton');
                Route::post('/store-token', [\App\Http\Controllers\WebNotificationController::class, 'storeToken'])->name('store.token');
                Route::post('/send-web-notification', [\App\Http\Controllers\WebNotificationController::class, 'sendWebNotification'])->name('send.web-notification');
            });



            ### ckeditor

            Route::post('/pages/uploadImage', [\App\Http\Controllers\Ckeditor::class, 'uploadImage'])->name('upload.image');
        }
    );
});
