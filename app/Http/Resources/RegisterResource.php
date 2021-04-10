<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{
    /**
     * @var mixed
     */
    private $name;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
//            'id' => $this->id,
//            'name' => strtoupper($this->name),
//            'email' => strtoupper($this->email),
            // 'kjhk' => $this->body,
        ];
    }


}
