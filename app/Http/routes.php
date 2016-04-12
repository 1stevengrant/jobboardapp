<?php

Route::get('/', 'HomeController@index');

Route::resource('jobs', 'JobController');

Route::get('jobs/{id}/{slug}', 'JobController@show');

Route::auth();
