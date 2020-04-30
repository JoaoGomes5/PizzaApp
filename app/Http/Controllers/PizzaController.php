<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){

        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderby('name', 'desc' )->get();
        // $pizzas = Pizza::where('type' , 'vulcano')->get();
         $pizzas = Pizza::latest()->get();


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
