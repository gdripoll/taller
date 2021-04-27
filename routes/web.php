<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return view('home', ['name' => 'manolo']);
    // return $router->app->version();
});

// API route group
$router->group(['prefix' => 'auth'], function () use ($router) {

    $router->get('login', 'AuthController@login');
    $router->post('login', 'AuthController@do_login');

    $router->get('register', 'AuthController@register');
    $router->post('register', 'AuthController@do_register');

});

$router->group(['prefix' => 'sys'], function () use ($router) {
    $router->get('users/{id}', 'UserController@singleUser');
    $router->get('users', 'UserController@allUsers');
});
