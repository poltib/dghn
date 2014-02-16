<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', function()
{
	return Redirect::route('sections.index');
}));

Route::get('logout', array('as' => 'logout', 'uses' => 'UsersController@logout'))->before('auth');

Route::post('login', array('as' => 'connexion', 'uses' => 'UsersController@connexion'))->before('guest');

Route::get('/login', array('as'=>'login', function()
{
    $title = 'connection';
    return View::make('users.login', compact('title'));
}))->before('guest');

Route::resource('announces', 'AnnouncesController');

Route::resource('contacts', 'ContactsController');

Route::resource('courses', 'CoursesController');

Route::resource('sections', 'SectionsController');

Route::resource('results', 'ResultsController');

Route::resource('users', 'UsersController');