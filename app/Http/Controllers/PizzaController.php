<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PizzaController extends Controller
{
    public function index() {
        $pizzas = [
            ['type' => 'hawaiian','base' => 'cheesy crust'],
            ['type' => 'volcano','base' => 'garlic crust'],
            ['type' => 'hawaiian','base' => 'thin & crispy']
        ];
           
        return view('pizzas', [
            'pizzas' => $pizzas,
            ]);
    }

    public function show($id) {
        return view('details' , ['id' => $id]);
    }
}
