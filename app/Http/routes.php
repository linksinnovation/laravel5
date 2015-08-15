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

/*Route::get('/', function () {
	return Session::token();
    //return view('welcome');
});*/

// Display all SQL executed in Eloquent
Event::listen('illuminate.query', function($query)
{
    var_dump($query);
    echo '<br /><br /><br />';
});

/*Route::get('/blog/create', [
    'as' => 'blog-create', 
    'uses' => 'BlogController@create'
]);*/

Route::controller('user', 'UserController');
Route::resource('workshop', 'TestController');

Route::get('/blog/test/{id}/{name}', [
	'as'=>'blog.test',
	'uses'=>'BlogController@test',
]);

Route::get('/blog/{id}/delete', [
    'as'=>'blog.delete',
    'uses'=>'BlogController@delete',
]);
Route::controller('photo', 'PhotoController');
Route::resource('blog', 'BlogController');

/*Route::resource('blog', 'BlogController', [
    'names' => [
        'index' => 'blog',
        'show' => 'blog.show',
    ]
]);*/
/*Route::resource('blog', 'BlogController', [
    'as' => 'admin'
]);*/


/*Route::get('/photo/test/{id}', function ($id) {
    return App\Photo::findOrFail($id);
});*/
