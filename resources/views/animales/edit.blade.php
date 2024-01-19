@extends('layouts.plantilla')
@section('titulo', 'Zoologico')
@section('contenido')
    <h1 class="text-3xl font-bold underline m-5">
        Editar {{ $animal->especie }}:
    </h1>
    <form action="" method="POST" enctype="multipart/form-data"
        class="flex flex-col items-center justify-center w-full ml-20">

        @csrf

        <div class="flex flex-col items-center gap-5 w-full">

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

            <label for="imagen">Modifica la imagen</label>
            <input class="border border-black rounded" type="file" id="imagen" name="imagen"
                value="{{ $animal->imagen }}">

            <button class="bverde" type="submit" id="enviar" name="enviar">Modificar animal</button>

        </div>

    </form>
@endsection
