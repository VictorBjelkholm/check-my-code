<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

/* Home Route */

Route::get('/', array('as' => 'homepage', 'uses' => 'home@index'));

/* User Routes */
Route::get('logout', function() {
	//Redirect to login
	Auth::logout();
	return Redirect::to_route('list_codes');
});

Route::get('register', array('as' => 'register_user', 'uses' => 'users@new'));

Route::get('user/(:any)', array('as' => 'show_user', 'uses' => 'users@show'));

Route::post('register', array('as' => 'create_user', 'uses' => 'users@index'));

Route::post('login', 'users@login');

Route::get('login', array('as' => 'login_user', 'uses' => 'users@login'));

/* Code Routes */
Route::get('code/new', array('before' => 'auth', 'as' => 'new_code', 'uses' => 'codes@new'));

Route::post('code', array('as' => 'create_code', 'uses' => 'codes@index'));

Route::get('code/(:any)', array('as' => 'show_code', 'uses' => 'codes@show'));

Route::get('code/list', array('as' => 'list_codes', 'uses' => 'codes@list'));

/* Comment Routes */
Route::get('comment/new/(:any)', array('before' => 'auth', 'as' => 'new_comment', 'uses' => 'comments@new'));

Route::post('comment', array('before' => 'auth', 'uses' => 'comments@index'));

Route::get('comment/edit/(:any)', array('before' => 'auth', 'as' => 'edit_comment', 'uses' => 'comments@edit'));

/* Misc Routes */

Route::get('about', function(){
	return View::make('pages.about');
});
/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});