<?php

# Home
Route::get('/', 'HomeController@index');

# Jobs
Route::resource('jobs', 'JobController');
Route::get('jobs/{id}/{slug}', 'JobController@show');

# Authentication
Route::auth();

# API - Route group for API versioning
Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('jobs', 'ApiController');
});

# Profiles
Route::resource('profile', 'ProfileController');
