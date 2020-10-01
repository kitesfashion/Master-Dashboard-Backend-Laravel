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
                Route::get('/test', 'DashboardController@test')->name('test');

       });
});



