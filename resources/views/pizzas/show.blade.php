@extends('layouts.app')

    @section('content')

        <div class="wrapper pizza-details">

        <h1>Pedido por {{$pizza->name}}</h1>
        <p class="type">Tipo - {{$pizza->type}}</p>
        <p class="base">Base - {{$pizza->base}}</p>
        <p class="toppings">Ingredientes: </p>
        <ul>
            @foreach($pizza->toppings as $topping)

        <li>{{$topping}}</li>

            @endforeach

        </ul>
        <form action="{{route('pizzas.destroy' , $pizza->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="">Completar pedido</button>
        </form>
        </div>

        <a href="/pizzas" class="back">Voltar para todos os pedidos</a>

    @endsection
