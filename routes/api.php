<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(["namespace"=>"App\Http\Controllers\Admin"],function() {
    Route::get('/company', 'MainController@companyinfo');
    Route::get('/test_category', 'TestController@test_category_api');
    Route::get('/slider', 'TestController@slider_api');
    Route::get('/mission', 'MainController@missioninfo');
    Route::get('/blogs', 'MainController@blog_api');
    Route::get('/blog/{id}', 'MainController@blog_view');
    Route::post('/contact', 'MainController@contact_store');
    Route::get('/test_view/{id}', 'TestController@test_api');
    Route::get('/single_view/{id}', 'TestController@single_view');
    Route::post('/appoinments', 'MainController@appoinment_store');
    Route::get('/doctor', 'MainController@doctor_api');
    Route::get('/homesample', 'ServiceController@homesample');
    Route::get('/homereport', 'ServiceController@homereport');
    Route::get('/onlinereport', 'ServiceController@onlinereport');
    Route::get('/banner', 'ServiceController@banner_api');
    Route::post('/testappoinment', 'MainController@testappoinment');
    Route::post('/appointment', 'MainController@appointment');
   
});

