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

Route::get('/', function () {

    $name = 'Mirko Mirkovic';
    $age = 26;

    return view('welcome',compact('name','age'));
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/cars', 'CarsController@index')->name('cars');
Route::get('/cars/{id}', 'CarsController@show')->name('singe-car');


