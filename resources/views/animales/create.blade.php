@extends('layouts.plantilla')
@section('titulo', 'Zoologico')
@section('contenido')
    <h1 class="text-3xl font-bold underline m-5">
        Crear annimal:
    </h1>
    <form action="" method="POST" enctype="multipart/form-data"
        class="flex flex-col items-center justify-center w-full ml-20">

        @csrf

        <div class="flex flex-col items-center gap-5 w-full">

            <label for="especie">Introduce la especie</label>
            <input class="border border-black rounded" type="text" id="especie" name="especie">

            <label for="peso">Introduce el peso</label>
            <input class="border border-black rounded" type="text" id="peso" name="peso">

            <label for="altura">Introduce la altura</label>
            <input class="border border-black rounded" type="text" id="altura" name="altura">

            <label for="fecha">Introduce la fecha de nacimiento</label>
            <input class="border border-black rounded" type="date" id="fecha" name="fecha">

            <label for="alimentación">Introduce la alimentación</label>
            <input class="border border-black rounded" type="text" id="alimentación" name="alimentación">

            <label for="imagen">Introduce la imagen</label>
            <input class="border border-black rounded" type="file" id="imagen" name="imagen">

            <button class="bverde" type="submit" id="enviar" name="enviar">Añadir animal</button>

        </div>

    </form>
@endsection
