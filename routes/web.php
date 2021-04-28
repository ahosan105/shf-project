<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'Homecontrolar@index')->name('index');
Route::get('/catagory', 'Homecontrolar@catagory')->name('catagory');
Route::get('/case', 'Homecontrolar@case_study')->name('case');

Route::get('/blog','Homecontrolar@blog')->name('blog');
// Route::get('/home','HomeController@home1')->name('practice');
Route::get('/home','Homecontrolar@home')->name('home');


