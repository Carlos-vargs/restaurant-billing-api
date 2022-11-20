<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WaiterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'cedula' => $this->cedula_mesero,
            'nombre' => trim($this->primer_nombre . ' ' . $this->segundo_nombre) . ' ' . trim($this->primer_apellido . ' ' . $this->segundo_apellido),
            'telefono' => $this->numero_telefono,
        ];
    }
}
