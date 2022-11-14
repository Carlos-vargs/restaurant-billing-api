<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'cedula_cliente' => 'required|string',
            'primer_nombre' => 'required|string',
            'segundo_nombre' => 'nullable|string',
            'primer_apellido' => 'required|string',
            'segundo_apellido' => 'nullable|string',
            'numero_telefono' => 'required|string'
        ];
    }
}
