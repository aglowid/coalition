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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(["middleware" => ["web"]], function()
{
    Route::get("/products", "ProductsController@index");
    Route::get("/products/create", "ProductsController@create");
    Route::post("/products/store", "ProductsController@store");
    Route::get("/products/{id}/edit", "ProductsController@edit");
    Route::post("/products/update", "ProductsController@update");
    Route::get("/products/{id}/active", "ProductsController@active");
    Route::get("/products/{id}/deactive", "ProductsController@deactive");
    Route::post("/products/delete", "ProductsController@destroy");
});