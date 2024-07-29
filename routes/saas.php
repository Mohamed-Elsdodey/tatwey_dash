<?php

use App\Http\Controllers\Saas\{AuthController,
    HomeController,

};
use Illuminate\Support\Facades\Route;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/saas',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {


    Route::get('login', [AuthController::class, 'loginView'])->name('saas.login');
    Route::post('login', [AuthController::class, 'postLogin'])->name('saas.postLogin');

});



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/saas',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'saas']
    ], function() {


    Route::group([ 'middleware' => 'saas', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ], function () {

        Route::get('/', [HomeController::class, 'index'])->name('saas.index');

        Route::get('logout', [AuthController::class, 'logout'])->name('saas.logout');



        Route::resource('saas_profile', \App\Http\Controllers\Saas\ProfileController::class);



        ### Saas ###

        Route::resource('saas_data', \App\Http\Controllers\Saas\SaasController::class);
        Route::get('activateSaas', [App\Http\Controllers\Saas\SaasController::class, 'activate'])->name('saas.active.saas');




        ### schools

        Route::resource('schools', \App\Http\Controllers\Saas\SchoolController::class);

        Route::get('show_school_permissions', [App\Http\Controllers\Saas\SchoolController::class, 'show_school_permissions'])->name('saas.show_school_permissions');

        Route::post('update_school_permissions', [App\Http\Controllers\Saas\SchoolController::class, 'update_school_permissions'])->name('saas.update_school_permissions');



        ### Permission

        Route::resource('permissions', \App\Http\Controllers\Saas\PermissionController::class);



        ## School_Admins


        Route::resource('school_admins', \App\Http\Controllers\Saas\SchoolAdminController::class);
        Route::get('saasActivateAdmin', [App\Http\Controllers\Saas\SchoolAdminController::class, 'activate'])->name('saas.active.admin');



        ### School Roles

        Route::resource('school_roles', \App\Http\Controllers\Saas\SchoolRoleController::class);




    });

});
