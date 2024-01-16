@extends('layouts.plantilla')
@section('titulo', 'Zoologico')
@section('contenido')

    <h1 class="text-3xl font-bold underline m-5">
        Listado de animales
    </h1>
    <div class="flex flex-row w-full gap-5 m-5">
        @foreach ($animales as $animal)
        <div class="gap-5 w-3/12 ">
            <img src="assets/imagenes/{{ $animal['imagen'] }}" alt="imagen de {{$animal['especie']}}">
            <p>Animal: {{ $animal['especie'] }} ,peso: {{ $animal['peso'] }}, altura: {{ $animal['altura'] }} , fecha de
                nacimiento: {{ $animal['fechaNacimiento'] }}, alimentacion:
                {{ $animal['alimentacion'] }}</p><br>
        </div>
    @endforeach
    </div>

@endsection
