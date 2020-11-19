<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/pizzas', function () {
    // return 'pizzas!';
    // return ['name' => 'veg pizzas', 'base' => 'classic'];
    // get data from db
    return view('pizzas', ['type' => 'hawaiian']);

});
