<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    // public function __construct()
    // {
    //         $this->middleware('auth');
    // }

    public function index(){

        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderby('name', 'desc' )->get();
        // $pizzas = Pizza::where('type' , 'vulcano')->get();
         $pizzas = Pizza::latest()->get();


         return view('pizzas.index' ,
         ['pizzas' => $pizzas]);

    }
    public function showPizza($id){

        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);

    }

    public function create(){

        return view('pizzas.create');

    }

    public function store(){

      $pizza = new Pizza();

      $pizza->name = request('name');
      $pizza->type = request('type');
      $pizza->base = request('base');
      $pizza->toppings = request('toppings');



      $pizza->save();


        return redirect('/')->with('message' , 'Obrigado pelo seu pedido');
    }

    public function destroy($id){

        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');




    }
}
