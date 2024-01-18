@extends('layouts.plantilla')
@section('titulo', 'Zoologico')
@section('contenido')

    <h1 class="text-3xl font-bold underline m-5">
        Listado de animales
    </h1>
    <div class="flex flex-row w-full gap-5 m-5">
        @forelse ($animales as $animal)
            <div class="gap-5 w-3/12 ">
                <img src="assets/imagenes/{{ $animal['imagen'] }}" alt="Imagen de {{ $animal['especie'] }}">
                <p>Animal: {{ $animal['especie'] }}</p>
                <p>Peso: {{ $animal['peso'] }}</p>
                <p>Altura: {{ $animal['altura'] }}</p>
                <p>Fecha de nacimiento: {{ $animal['fechaNacimiento'] }}</p>
                <p>Alimentacion:{{ $animal['alimentacion'] }}</p>
                <a href="{{ route('animales.show', $animal['especie']) }}">Ver detalles de {{ $animal['especie'] }}</a>
            </div>
        @empty
            <p>No hay animales que mostrar</p>
        @endforelse
    </div>
@endsection
