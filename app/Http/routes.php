<?php

Route::get('/', 'HomeController@index');

Route::resource('jobs', 'JobController');

Route::auth();
