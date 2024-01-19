<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\animal;
use Exception;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animales = Animal::all();
        return view('animales.index')->with(['animales' => $animales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, /*Animal $animal*/)
    {

        //return view('animales.show')->with(['animal' => $animal]);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $animal)
    {
        try {
            $animal = Animal::where('especie', $animal)->firstOrFail();
            //Se puede hacer con find poniendo un id :)
        } catch (Exception $e) {
            echo ("Error" . $e);
        }

        return view('animales.show')->with(['animal' => $animal]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $animal)
    {
        try {
            $animal = Animal::where('especie', $animal)->firstOrFail();
            //Se puede hacer con find poniendo un id :)
        } catch (Exception $e) {
            echo ("Error" . $e);
        }

        return view('animales.edit', ['animal' => $animal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, /*Animal $animal*/)
    {

        //return view('animales.show')->with(['animal' => $animal]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /*  • En el método store creamos una nueva instancia del modelo Animal, asignamos
        el valor de todos los campos de entrada y los guardamos. Por último, después de
        guardar, hacemos una redirección a la ruta animales.show .

        • En el método update recibe el animal por parámetro y actualizamos sus campos
        y los guardamos. Por último, realizamos una redirección a la pantalla con la vista
        detalle del animal editado. */
}
