<?php

Route::get('/admin/dashboard', 'Admin\DashboardController@index');


Route::get('/admin/packages/quests/{package_id}', 'Admin\PackagesController@showQuests');
Route::post('/admin/packages/quests/{package_id}', 'Admin\PackagesController@storeQuest');


Route::resource('/admin/packages', 'Admin\PackagesController', ['params' => ['/admin/packages' => 'packages']]);