@extends('layouts.app')

    @section('content')

        <div class="wrapper create-pizza">
                <h1>Crie a sua Pizza</h1>

                <form action="/pizzas" method="POST">
                    @csrf
                    <label for="name">Seu nome: </label>
                    <input type="text" id="name" name="name">
                    <label for="type">Escolha o tipo da Pizza: </label>
                    <select name="type" id="type">
                        <option value="margarita">Margarita</option>
                        <option value="havaiana">Havaiana</option>
                        <option value="vegetariana">Vegetariana</option>
                        <option value="vulcano">Vulcano</option>
                    </select>
                    <label for="base">Escolha a base da Pizza: </label>
                    <select name="base" id="base">
                        <option value="classica">Classica</option>
                        <option value="fina">Fina</option>
                    </select>
                    <fieldset>
                        <label>Ingredientes: </label><br />
                        <input type="checkbox" name="toppings[]" value="cogumelos">Cogumelos<br />
                        <input type="checkbox" name="toppings[]" value="ananas">Ananás<br />
                        <input type="checkbox" name="toppings[]" value="fiambre">Fiambre<br />
                        <input type="checkbox" name="toppings[]" value="pimento">Pimento<br />


                    </fieldset>
                    <input type="submit" value="Finalizar o pedido">

                </form>
            </div>
             <div class="wrapper link">

                <a href="{{route('pizzas.store')}}"> <- Voltar para todos os pedidos </a>
            </div>

    @endsection
