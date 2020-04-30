@extends('layouts.layout')

    @section('content')

        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Jo's Pizza List
                </div>


            {{-- @for( $i = 0 ;  $i < count($pizzas) ; $i++ )

                <p>{{$pizzas[$i]['type']}}</p>

            @endfor --}}
            <h2>{{$name}} - {{$age}}</h2>
            @foreach($pizzas as $pizza)

                <div>
                    {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}

                </div>

            @endforeach

            </div>
        </div>
    @endsection
