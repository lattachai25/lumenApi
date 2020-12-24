<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });


$router->group(['prefix' => 'api/v1', 'namespace' => 'v1'], function () use ($router){
    // list All User
    $router->get('/users','UserController@index');
    // Create New User
	$router->post('/users','UserController@store');
    // Update New User
	$router->put('/users/{id}','UserController@update');
    // Deleted User
	$router->delete('/users/{id}','UserController@destroy');
    // Show User
	$router->get('/users/{id}','UserController@show');
});