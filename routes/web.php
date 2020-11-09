<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Admin Dashbord Route................................................................................................

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
       Route::group(["namespace"=>"App\Http\Controllers\Admin"],function() {
     
                Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
                Route::get('/logout', 'DashboardController@logout')->name('logout');

                //company---------------------------------------------------------------
                Route::get('/company', 'MainController@company')->name('company');
                Route::get('/company-edit/{id}', 'MainController@company_edit');
                Route::post('/company-update', 'MainController@company_update')->name('company.update');
                //Test  -----------------------------------------------------------------
                Route::get('/test_category', 'TestController@test_category')->name('test-category');
                Route::post('/test_category/store', 'TestController@test_category_store')->name('test-category-store');
                Route::get('/test_category/edit/{id}', 'TestController@test_category_edit')->name('test-category-edit');
                Route::post('/test_category/update', 'TestController@test_category_update')->name('test-category-update');
                Route::get('/test_category/delete/{id}', 'TestController@test_category_delete')->name('test-category-delete');
               
                Route::get('/test', 'TestController@test')->name('test');
                Route::post('/test/store', 'TestController@test_store')->name('test_store');
                Route::get('/test/edit/{id}', 'TestController@test_edit')->name('test_edit');
                Route::post('/test/update', 'TestController@test_update')->name('test_update');
                Route::get('/test/delete/{id}', 'TestController@test_delete')->name('test_delete');





                //Slider------------------------------------------------------------------
                Route::get('/slider', 'TestController@slider')->name('slider');
                Route::post('/slider/store', 'TestController@slider_store')->name('slider-store');
                Route::get('/slider/edit/{id}', 'TestController@slider_edit')->name('slider-edit');
                Route::post('/slider/update', 'TestController@slider_update')->name('slider-update');
                Route::get('/slider/delete/{id}', 'TestController@slider_delete')->name('slider-delete');
                //Mission Vision Quoto chairman---------------------------------------------------------------
                Route::get('/mission', 'MainController@mission')->name('mission');
                Route::get('/mission-edit/{id}', 'MainController@mission_edit');
                Route::post('/mission-update', 'MainController@mission_update')->name('mission.update');
                //Blog.---------------------------------------------------------------------------------------
                Route::get('/blogs', 'MainController@blogs')->name('blogs');
                Route::post('/blogs-store', 'MainController@blogs_store')->name('blogs.store');
                Route::get('/blogs_edit/{id}', 'MainController@blogs_edit');
                Route::get('/blog_delete/{id}', 'MainController@blogs_delete');
                Route::post('/blogs-update', 'MainController@blogs_update')->name('blogs.update');
                
                //Contact--------------------------------------------------------------------------------------
                Route::get('/contact', 'ContactController@contact_us')->name('contact-us');
               //Appoinment--------------------------------------------------------------------------------
                Route::get('/appointlist', 'ContactController@appointlist')->name('appointlist');
                Route::get('/apoinment_view/{id}', 'ContactController@apoinment_view')->name('apoinment_view');
                //Test Appointment List-------------------------------------------------------------------------
                Route::get('/testppointlist', 'ContactController@testppointlist');
                Route::get('/testppointlist_view/{id}', 'ContactController@testppoint_view');

                //Doctors..........................................................................
                Route::get('/doctors', 'MainController@doctor')->name('doctor');
                Route::post('/doctors/store', 'MainController@doctor_store');
                Route::post('/doctors/update', 'MainController@doctor_update');
                Route::get('/doctors/edit/{id}', 'MainController@doctor_edit');
                Route::get('/doctors/delete/{id}', 'MainController@doctor_delete');
                
                //Service............................................................................
                Route::get('/service', 'ServiceController@service');
                Route::post('/service/store', 'ServiceController@service_store');
                Route::post('/service/update', 'ServiceController@service_update');
                Route::get('/service/edit/{id}', 'ServiceController@service_edit');
                //Banner-----------------------------------------------------------------------
                Route::get('/banner', 'ServiceController@banner');
                Route::get('/banner/edit/{id}', 'ServiceController@banner_edit');
                Route::post('/banner/update/', 'ServiceController@banner_update');








       });
});



