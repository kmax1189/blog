<?php

Route::get('/', 'TasksController@home');

Route::get('/tasks', 'TasksController@index');

Route::get('/about', 'TasksController@about');

Route::get('/tasks/{task}', 'TasksController@show');
