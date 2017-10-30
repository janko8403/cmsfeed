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


Auth::routes();

// ---------------------------------------------------------------------------------------------------------------
// Cms routes
// ---------------------------------------------------------------------------------------------------------------

// Dashboard
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Post
Route::resource('/posts', 'PostsController');

// Categories
Route::resource('/categories', 'CategoriesController');

// Settings
Route::resource('/settings', 'SettingsController', ['except' => ['create', 'store', 'index', 'destroy']]);

// Social
Route::resource('/social', 'SocialController', ['except' => ['create', 'store', 'index', 'destroy', 'show']]);

// Get Newsletter
Route::get('/get-newsletter', 'GetNewsletterController@index');
Route::get('/get-newsletter/viewsend', 'GetNewsletterController@viewSend');
Route::post('/get-newsletter/send', 'GetNewsletterController@send');

// Users
Route::get('/users', 'UsersController@index');
Route::get('/users/add', 'UsersController@add');
Route::post('/users', 'UsersController@addUser');
Route::delete('/users/{id}', 'UsersController@destroy');

// Top 5
Route::resource('top-five', 'TopFiveController', ['except' => ['show']]);

// Media
Route::resource('media', 'MediaController', ['except' => ['edit', 'update']]);

// Mecze
Route::resource('match', 'MatchController', ['except' => ['show']]);

// Brak dostępu
Route::get('/access-denied', 'PageNotFoundController@index');



// ---------------------------------------------------------------------------------------------------------------
// Pages routes
// ---------------------------------------------------------------------------------------------------------------

// Newsletter
Route::get('/newsletter', 'NewsletterController@index');
Route::post('/newsletter_send', ['uses' => 'NewsletterController@newsletterSend', 'as' => 'send']);
Route::get('/newsletter_delete/{code}', ['uses' => 'NewsletterController@newsletterDelete', 'as' => 'delete']);

// Register facebook User
Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

// Page
Route::get('/', 'PageController@index');
Route::get('/post/{id}', 'PageController@show');
Route::get('/post-match/{id}', 'PageController@postmatch');
