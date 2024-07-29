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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {


    Route::get('contact_us',[App\Http\Controllers\Web\HomeController::class,'contact_us'])->name('web.contact_us');
    Route::get('privacy_policy',[App\Http\Controllers\Web\HomeController::class,'privacy_policy'])->name('web.privacy_policy');

    Route::get('about_us',[App\Http\Controllers\Web\HomeController::class,'about_us'])->name('web.about_us');


    Route::get('/',[App\Http\Controllers\Web\HomeController::class,'index'])->name('frontend.index');




});



Route::get('/clear/route', function (){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    \Illuminate\Support\Facades\Artisan::call('migrate');

    return 'Optimize Cleared Successfully By El Sdodey';
});


Route::get('/empty/route', function (){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    \Illuminate\Support\Facades\Artisan::call('migrate:refresh');

    return 'Optimize Cleared Successfully By El Sdodey';
});
