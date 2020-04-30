<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){

        $pizzas = [
            ['type' => 'havaiana' , 'base' => 'queijo mozzarela'],
            ['type' => 'vulcano' , 'base' => 'queijo cheddar'],
            ['type' => 'veg supreme' , 'base' => 'queijo vegan'],

        ];



         return view('pizzas' ,
         ['pizzas' => $pizzas,
            'name' => request('name'),
            'age' => request('age')
        ]);

    }
    public function showPizza($id){

        return view('details', ['id' => $id]);

    }
}
