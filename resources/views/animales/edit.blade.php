@extends('layouts.plantilla')
@section('titulo', 'Zoologico')
@section('contenido')
    <h1 class="text-3xl font-bold underline">
       Página de editar annimal
    </h1>
    <form action="" enctype="multipart/form-data">

        @csrf

        <label for="especie">Modifica la especie</label>
        <input type="text" id="especie" name="especie" value="{$animal['especie']}">
        <label for="peso">Modifica el peso</label>
        <input type="text" id="peso" name="peso" value="{$animal['peso']}">

        <label for="altura">Modifica la altura</label>
        <input type="text" id="altura" name="altura" value="{$animal['altura']}">

        <label for="fecha">Modifica la fecha de nacimiento</label>
        <input type="date" id="fecha" name="fecha" value="{$animal['fechaNacimiento']}">

        <label for="alimentación">Modifica la alimentación</label>
        <input type="date" id="alimentación" name="alimentación" value="{$animal['alimentacion']}">

        <label for="imagen">Modifica la imagen</label>
        <input type="file" id="imagen" name="imagen" value="{$animal['imagen']}">

        <button type="submit" id="enviar" name="enviar">Modificar animal</button>
    </form>
@endsection
