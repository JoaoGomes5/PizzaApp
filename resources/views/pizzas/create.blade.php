@extends('layouts.layout')

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
                    <input type="submit" value="Finalizar o pedido">

                </form>

        </div>

    @endsection
