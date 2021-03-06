<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

include("admin_routes.php");
Route::get('/', 'MainController@index');

Auth::routes();

Route::get('/region/{province}', 'RegionController@getCity');


Route::resource('/packages', 'PackagesController');

Route::get('/quests/completion/{random_id}', 'QuestController@completion');
Route::get('/carts', 'CartController@index');
Route::post('/carts', 'CartController@store');
Route::get('/checkout/finish', 'CheckoutController@finish');
Route::post('/checkout', 'CheckoutController@store');

Route::get('/user/dashboard', 'HomeController@index');
Route::resource('/user/bookings', 'BookingController');
Route::resource('/user/quests', 'QuestController');

Route::post('/packages/review/', 'ReviewController@store');