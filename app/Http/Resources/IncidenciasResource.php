<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IncidenciasResource extends JsonResource
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
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'aula' => $this->aula,
            'fcreacion' => $this->fcreacion,
            'fmodificacion' => $this->fmodificacion,
            'fcierre' => $this->fcierre,
            'estado' => $this->estado,
            'correo' => $this->correo,
            'comentarios' => $this->comentarios,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            

        ];
    }
}
