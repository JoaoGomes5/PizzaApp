@extends('layouts.app')

    @section('content')
    <div class="wrapper pizza-index">
        <h1>Pedidos</h1>
        @foreach($pizzas as $pizza)

        <div class="pizza-item">
        <img src="/img/pizza2.png" alt="pizzaicon">
        <h4><a href="{{route('pizzas.show' , $pizza->id)}}"> {{$pizza->name}} </a></h4>

        </div>

        @endforeach
    </div>


    @endsection
