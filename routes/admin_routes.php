<?php

Route::get('/admin/dashboard', 'Admin\DashboardController@index');

Route::resource('/admin/packages', 'Admin\PackageController', ['params' => ['/admin/packages' => 'packages']]);