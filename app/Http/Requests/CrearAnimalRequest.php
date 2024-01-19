<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearAnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'especie' => 'required|min:3',
            'peso' => 'required',
            'altura' => 'required',
            'fechaNacimiento' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ];
        /* */
    }
    public function attributes()
    {
        return [
            'especie' => 'Especie del animal',
            'peso' => 'Peso del animal',
            'altura' => 'Altura del animal',
            'fechaNacimiento' => 'Fecha de nacimiento del animal',
            'imagen' => 'Imagen del animal'
        ];
    }
    public function messages()
    {
        return [
            'especie.required' => 'la especie es obligatoria',
            'peso.required' => 'el peso es obligatorio',
            'altura.required' => 'la altura es obligatoria',
            'fechaNacimiento.required' => 'la fecha de nacimiento es obligatoria',
            'imagen.required' => 'la imagen es obligatoria',
            'image.mimes' => 'El formato de la imagen no es el debido'
        ];
    }
    /*
    public function InsertarConValidacion(CrearClienteRequest $request)
    {
        //si entramos aqui, el formulario es válido.
    }
    */
}
