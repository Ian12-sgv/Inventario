<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'titulo' =>'required|max:255|min:3',
        'direccion_ip' =>'required|max:300|min:3',
        'modelo' =>'required|max:300|min:3',
        'marca' =>'required|max:300|min:3',
        'serial' =>'required|max:300|min:3',
        'direccion_mac' =>'required|max:300|min:3',
        'componentes_marcas' =>'required|max:300|min:3',
        'usuario' =>'required|max:300|min:3',
        'oficina' =>'required|max:300|min:3'
        ];
    }
}
