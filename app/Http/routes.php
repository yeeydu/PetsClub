<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'pageController@index')->name('home');
Route::get('/about', 'pageController@about')->name('about');
Route::get('/adoption', 'adoptionController@adoption')->name('adoption');
Route::get('/news', 'newsController@news')->name('news');
Route::get('/news/{id}', 'newsController@show')->name('news_details');

Route::get('/contacts', 'contactsController@contacts')->name('contacts');
Route::post('/contacts', 'contactsController@saveContacts')->name('saveContacts');
Route::get('/success', 'contactsController@success')->name('success');

Route::resource('/admin/adoptions', 'Adoptions_Controller');
Route::resource('/admin/contacts', 'Contact_Controller');
Route::resource('/admin/news', 'News_Controller');
Route::auth();

Route::get('/admin', 'HomeController@index');
    