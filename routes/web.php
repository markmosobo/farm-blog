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

Route::get('/','FrontEndController@index');
Route::get('/about','FrontEndController@about');
Route::get('/contact','FrontEndController@contact');
Route::get('/stories','FrontEndController@stories');
Route::get('/author-archive','FrontEndController@authorarchive');
Route::get('/single-author-archive','FrontEndController@singleauthorarchive');
Route::get('/story-categories','FrontEndController@storyCategories');
Route::get('/single-story','FrontEndController@singleStory');
