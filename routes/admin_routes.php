<?php

Route::get('/admin/dashboard', 'Admin\DashboardController@index');

Route::resource('/admin/packages', 'Admin\PackagesController', ['params' => ['/admin/packages' => 'packages']]);