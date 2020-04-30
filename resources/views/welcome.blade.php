@extends('layouts.layout')

    @section('content')

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="/img/pizza.png" alt="this is the pizza logo">
                <div class="title m-b-md">
                    JoJo's Pizza<br/>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Make a Order</a>
                </div>
            </div>
        </div>
 @endsection
