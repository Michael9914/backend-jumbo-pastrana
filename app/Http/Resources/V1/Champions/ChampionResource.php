<?php

namespace App\Http\Resources\V1\Champions;

use Illuminate\Http\Resources\Json\JsonResource;

class ChampionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'names' => $this->name,
            'lastname' => $this->lastname,
            'avatar' => $this->avatar,
            'username' => $this->username,
            'birthdate' => $this->birthdate,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'password_changed' => $this->password_changed,
        ];
    }
}
