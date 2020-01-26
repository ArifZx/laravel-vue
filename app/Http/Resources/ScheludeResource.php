<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScheludeResource extends JsonResource
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
            'doctor' => $this->doctor,
            'place' => $this->place,
            'date' => $this->from,
            'isToday' => $this->from->isToday(),
            'day' => $this->from->isoFormat('dddd'),
            'start' => $this->from->format('h:m'),
            'end' => $this->to->format('H:i'),
            'slot' => $this->slot,
            'canOnlineBook' => $this->canOnlineBook,
        ];
    }
}
