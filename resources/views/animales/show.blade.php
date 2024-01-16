@extends('layouts.plantilla')
@section('titulo', 'Zoologico')
@section('contenido')

    <h1 class="text-3xl font-bold underline">
        pagina de listar annimal concreto: "{{ $animal }}"
    </h1>
    <div class="flex flex-row ">
        <div >
            <img src="assets/imagenes/{{ $animal['imagen'] }}" alt="imagen de {{ $animal['especie'] }}">
            <p>Animal: {{ $animal['especie'] }} </p>
            <p>Peso: {{ $animal['peso'] }}</p>
            <p>Altura: {{ $animal['altura'] }}</p>
            <p>Fecha de nacimiento: {{ $animal['fechaNacimiento'] }}</p>
            <p>Alimentacion: {{ $animal['alimentacion'] }}</p>
            <p>Descripción : {{ $animal['descripcion'] }}</p><br>
        </div>
    </div>
@endsection
