<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\DepartmentController;
use App\Models\Department;

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

/*
*** GENERATE KEY ***
$router->get('/', function() {
     return \Illuminate\Support\Str::random(32);
});
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware' => 'RestFull'], function () use ($router) {

    $router->get('departments', 'DepartmentController@index');

    $router->get('provinces', 'ProvinceController@index');
    $router->get('provinces/{department}', 'ProvinceController@department');

    $router->get('districts', 'DistrictController@index');
    $router->get('districts/{province}', 'DistrictController@province');
    $router->get('districts/departments/{departments}', 'DistrictController@departments');

});


