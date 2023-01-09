<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IknaMessageResssource extends JsonResource
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
            'type_message' => $this->type_message,
            'contenu' => $this->contenu,
            'logo' => $this->logo,
            'id_destinateur' => $this->id_destinateur,
            'id_expeditaire' => $this->id_expeditaire,
            'created_at' => $this->created_at
        ];
    }
}
