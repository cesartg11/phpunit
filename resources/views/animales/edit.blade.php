@extends('layouts.plantilla')
@section('titulo', 'Zoologico')
@section('contenido')
    <h1 class="text-3xl font-bold underline m-5">
        Editar {{ $animal->especie }}:
    </h1>

    @if ($errors->any())
        <p>Hubo errores</p>
        <@foreach ($errors->all() as $error)
            <p>{{ $error }}</p>;
    @endforeach
    @endif

    <div class="flex flex-row items-center justify-center">

        <img class="m-20 w-1/5" src="{{ asset('assets/imagenes/' . $animal->imagen) }}" alt="Imagen de {{ $animal->especie }}">


        <form action="{{ route('animales.update', $animal) }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col items-center justify-center w-full gap-2">

            @csrf
            @method('put')

            <label for="especie">Modifica la especie</label>
            <input class="border border-black rounded" type="text" id="especie" name="especie"
                value="{{ $animal->especie }}">

            <label for="peso">Modifica el peso</label>
            <input class="border border-black rounded" type="text" id="peso" name="peso"
                value="{{ $animal->peso }}">

            <label for="altura">Modifica la altura</label>
            <input class="border border-black rounded" type="text" id="altura" name="altura"
                value="{{ $animal->altura }}">

            <label for="fecha">Modifica la fecha de nacimiento</label>
            <input class="border border-black rounded" type="date" id="fecha" name="fecha"
                value="{{ $animal->fechaNacimiento }}">

            <label for="alimentación">Modifica la alimentación</label>
            <input class="border border-black rounded" type="text" id="alimentación" name="alimentación"
                value="{{ $animal->alimentacion }}">

            <label for="descripcion">Modifica la Descripción</label>
            <input class="border border-black rounded" type="text" id="descripcion" name="descripcion"
                value="{{ $animal->descripcion }}">

            <label for="imagen">Modifica la imagen</label>
            <input class="border border-black rounded" type="file" id="imagen" name="imagen"
                value="{{ $animal->imagen }}">

            <button class="bverde" type="submit" id="enviar" name="enviar">Modificar animal</button>

    </div>

    </form>
@endsection
