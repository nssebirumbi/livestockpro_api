<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FarmResource extends JsonResource
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
            'id'=>$this->id,
            'name' => $this->name,
            'city' => $this->city,
            'address' => $this->address,
            'email' => $this->email,
            'contact' => $this->contact,
            'website' => $this->website,
            'zip' => $this->zip,
            'country' => $this->country,
            'logo' => $this->logo,
            'client_id' => $this->client_id
        ];
    }
}
