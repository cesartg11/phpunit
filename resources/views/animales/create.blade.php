@extends('layouts.plantilla')
@section('titulo', 'Zoologico')
@section('contenido')
    <h1 class="text-3xl font-bold underline">
       Página de crear annimal
    </h1>
    <form action="" enctype="multipart/form-data">

        @csrf

        <label for="especie">Introduce la especie</label>
        <input type="text" id="especie" name="especie" required>

        <label for="peso">Introduce el peso</label>
        <input type="text" id="peso" name="peso" required>

        <label for="altura">Introduce la altura</label>
        <input type="text" id="altura" name="altura" required>

        <label for="fecha">Introduce la fecha de nacimiento</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="alimentación">Introduce la alimentación</label>
        <input type="date" id="alimentación" name="alimentación" required>

        <label for="imagen">Introduce la imagen</label>
        <input type="file" id="imagen" name="imagen" required>

        <button type="submit" id="enviar" name="enviar">Añadir animal</button>
    </form>
@endsection
