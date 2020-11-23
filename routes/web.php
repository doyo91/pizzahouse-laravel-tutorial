<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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

Route::get('/pizzas', [PizzaController::class, 'index']);

    
Route::get('/pizzas/{id}','PizzaController@show' );


// Examples
/* Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'hawaiian','base' => 'cheesy crust'],
        ['type' => 'volcano','base' => 'garlic crust'],
        ['type' => 'hawaiian','base' => 'thin & crispy']
    ];

    $name = request('name');
    $age = request('age');

    return view('pizzas', [
        'pizzas' => $pizzas,
        'name' => $name,
        'age' => $age,
        ]);

}); */
Route::get('/pizzastut', function () {
    // return 'pizzas!';
    // return ['name' => 'veg pizzas', 'base' => 'classic'];
    // get data from db
    // return view('pizzas', ['type' => 'hawaiian','base' => 'cheesy crust']);
    // $pizza = ['type' => 'hawaiian','base' => 'garlic crust', 'price' => 10];
    $pizzas = [
        ['type' => 'hawaiian','base' => 'cheesy crust'],
        ['type' => 'volcano','base' => 'garlic crust'],
        ['type' => 'hawaiian','base' => 'thin & crispy']
    ];

    return view('pizzasejem', ['pizzas' => $pizzas]);

});
