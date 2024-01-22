<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\animal;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Exception;
use PDOException;
use App\Http\Requests\CrearAnimalRequest;

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
     * Show the form for creating a new resource.ñ
     */
    public function create()
    {
        return view('animales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CrearAnimalRequest $request)
    {
        // Crear una nueva instancia del modelo Animal
        $animal = new Animal();

        // Asignar los valores de los campos de entrada
        try {
            // Actualizar los campos del animal
            $animal->especie = $request->input('especie');
            $slug = Str::slug($request->input('especie'));
            $animal->slug = $slug;
            $animal->peso = $request->input('peso');
            $animal->altura = $request->input('altura');
            $animal->fechaNacimiento = $request->input('fechaNacimiento');
            $animal->alimentacion = $request->input('alimentacion');
            $animal->descripcion = $request->input('descripcion');

            // Procesar la nueva imagen (si se proporciona)
            if ($request->hasFile('imagen') && !empty($request->imagen) && $request->imagen->isValid()) {
                Storage::disk('animales')->delete($animal->imagen);
                $animal->imagen = $request->file('imagen')->store('', 'animales');
            }

            // Guardar los cambios
            $animal->save();
        } catch (PDOException $p) {
            echo ("Error:" . $p->getMessage());
        }

        // Redireccionar a la vista detalle del animal creado
        return redirect()->route('animales.show', $animal->especie);
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
    public function update(Request $request, Animal $animal)
    {

        $request->validate([
            'especie' => 'required|min:3',
            'peso' => 'required',
            'altura' => 'required',
            'fechaNacimiento' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,svg'
        ], [
            'especie.required' => 'la especie es obligatoria',
            'especie.min' => '  Debe tener almenos 3 letras',
            'peso.required' => 'el peso es obligatorio',
            'altura.required' => 'la altura es obligatoria',
            'fechaNacimiento.required' => 'la fecha de nacimiento es obligatoria',
            'imagen.required' => 'la imagen es obligatoria',
            'image.mimes' => 'El formato de la imagen no es el debido'
        ]);

        try {
            // Actualizar los campos del animal
            $animal->especie = $request->input('especie');
            $slug = Str::slug($request->input('especie'));
            $animal->slug = $slug;
            $animal->peso = $request->input('peso');
            $animal->altura = $request->input('altura');
            $animal->fechaNacimiento = $request->input('fechaNacimiento');
            $animal->alimentacion = $request->input('alimentacion');
            $animal->descripcion = $request->input('descripcion');

            // Procesar la nueva imagen (si se proporciona)
            if ($request->hasFile('imagen') && !empty($request->imagen) && $request->imagen->isValid()) {
                Storage::disk('animales')->delete($animal->imagen);
                $animal->imagen = $request->file('imagen')->store('', 'animales');
            }

            // Guardar los cambios
            $animal->save();
        } catch (PDOException $p) {
            echo ("Error:" . $p->getMessage());
        }

        // Redireccionar a la vista detalle del animal editado
        return redirect()->route('animales.show', $animal->especie);
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
