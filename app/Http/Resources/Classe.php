<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Classe extends JsonResource
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
            'libelle' => $this->libelle,
            'droit_ins' => $this->droit_ins,
            'mensualite' => $this->mensualite,
            'autre_frais' => $this->autre_frais,
            'filiere_id' => $this->filiere_id,
            'filiere' => $this->filiere,
            'created_at' => $this->created_at->format('m/d/Y'),
            'updated_at' => $this->updated_at->format('m/d/Y'),
        ];
    }
}
