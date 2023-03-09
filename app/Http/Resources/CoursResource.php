<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class CoursResource extends JsonResource
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
            'titre' => $this->titre,
            'description' => $this->description,
            'logo' => $this->logo,
            'lignecours' => LigneResource::collection($this->ligneCours),
            // Ajoutez d'autres attributs ici...
        ];
    }
}
