@extends('layouts.plantilla')
@section('titulo', 'Zoologico')
@section('contenido')

    <h1 class="text-3xl font-bold underline m-5">
        Listado de animales
    </h1>
    <div class="flex flex-row flex-wrap items-center justify-center gap-5">
        @forelse ($animales as $animal)
            <div class="shadow-2xl hover:shadow-green-600/60">
                <a href="{{ route('animales.show', $animal->especie) }}">
                    <img src="{{ asset('assets/imagenes/' . $animal->imagen) }}" alt="Imagen de {{ $animal->especie }}">
                    <div class="flex flex-col m-5">
                        <p>Animal: {{ $animal->especie }}</p>
                        <p>Peso: {{ $animal->peso }} kg</p>
                        <p>Altura: {{ $animal->altura }} cm</p>
                        <p>Edad: {{ $animal->getEdad() }} años</p>
                        <p>Alimentacion: {{ $animal->alimentacion }}</p>
                    </div>
                </a>
            </div>
        @empty
            <p>No hay animales que mostrar</p>
        @endforelse
    </div>
@endsection
