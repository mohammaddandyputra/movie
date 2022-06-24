<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CartController;

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
    return $router->app->version();
});

$router->post('login', 'AuthController@login');
$router->post('register', 'AuthController@register');
$router->get('profile', 'AuthController@profile');
$router->post('logout', 'AuthController@logout');

$router->group(['prefix' => 'movie'], function() use ($router) {
    $router->get('/', 'MovieController@index');
    $router->get('/{id}', 'MovieController@show');
    $router->post('/', 'MovieController@store');
    $router->patch('/{id}', 'MovieController@update');
    $router->delete('/{id}', 'MovieController@destroy');

    $router->group(['prefix' => 'filter'], function() use ($router) {
        $router->get('price', 'MovieController@filterPrice');
        $router->get('category', 'MovieController@filterCategory');
    });
});

$router->group(['prefix' => 'cart'], function() use ($router) {
    $router->get('/', 'CartController@index');
    $router->post('/', 'CartController@store');
    $router->delete('/{id}', 'CartController@delete');
});