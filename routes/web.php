<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resources([
    'users' => 'UserController'
]);

Route::resources([
    'workexperiences' => 'WorkExperienceController'
]);

Route::get('companies/register','CompanyController@register')->name('companies/register');

Route::resources([
    'companies' => 'CompanyController'
]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/seed','SeedController@index');
