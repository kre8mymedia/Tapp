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

// Basic Routes PagesController
Route::get('/', 'PagesController@index');
Route::get('/profile', 'PagesController@profile');
Route::get('/lock', 'PagesController@lock');
Route::get('/dashboard', 'PagesController@dashboard')->middleware('auth');
Route::get('/timecards/kiosk', 'TimecardsController@kiosk');
Route::get('/timecards/save', 'TimecardsController@save');


// Timecard CRUD
Route::resource('timecards', 'TimecardsController');
// Summary CRUD
Route::resource('summaries', 'SummariesController');
// Employee CRUD
Route::resource('employees', 'EmployeesController');
// Schedule CRUD
Route::resource('schedules', 'SchedulesController');
// Report CRUD
Route::resource('reports', 'ReportsController');
// User CRUD
Route::resource('admins', 'AdminsController');
// User CRUD
Route::resource('users', 'UsersController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


