<?php

namespace App\Http\Resources\Dodctor;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResourse extends JsonResource
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
            'name' => $this->name,
            'surname' => $this->surname,
            'age' => $this->age,
//            'is_visible' => $this->is_visible,
//            'profiles' => $this->profiles,
//            'patrname' => $this->patrname,
        ];
    }
}
