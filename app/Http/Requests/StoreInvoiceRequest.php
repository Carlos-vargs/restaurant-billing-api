<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceRequest extends FormRequest
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
            'total' => 'required',
            'iva' => 'required',
            'descuento' => 'required',
            'modo_pago' => 'required|string',
            'subtotal' => 'required',
            'mesero' => 'required',
            'productos' => 'required',
        ];
    }
}
