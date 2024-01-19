@extends('layouts.plantilla')
@section('titulo', 'Zoologico')
@section('contenido')

    <h1 class="text-3xl font-bold underline m-5">
        Datos de {{ $animal->especie }}:
    </h1>
    <div class="flex flex-row">
        <div class="m-5">
            <img src="{{ asset('assets/imagenes/' . $animal->imagen) }}" alt="Imagen de {{ $animal->especie }}">
        </div>
        <div class="m-5">
            <p>Animal: {{ $animal->especie }}</p>
            <p>Peso: {{ $animal->peso }}</p>
            <p>Altura: {{ $animal->altura }}</p>
            <p>Fecha de nacimiento: {{ $animal->fechaNacimiento }}</p>
            <p>Alimentacion: {{ $animal->alimentacion }}</p>
            <p>Descripción: {{ $animal->descripcion }}</p>
        </div>
    </div>
    <div class="m-5">
        <button><a class="bverde" href="{{ route('animales.edit', $animal->especie) }}">Editar animal</a></button>
        <button><a class="bverde" href="{{ route('animales.index') }}">Volver</a></button>
    </div>
@endsection
