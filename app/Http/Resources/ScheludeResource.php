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
            'doctor' => new DoctorResource($this->doctor),
            'place' => $this->place,
            'date' => $this->from->timezone('Asia/Jakarta'),
            'readableDate' => $this->from->timezone('Asia/Jakarta')->isoFormat('dddd, D MMMM YYYY'),
            'isToday' => $this->from->timezone('Asia/Jakarta')->isToday(),
            'day' => $this->from->timezone('Asia/Jakarta')->isoFormat('dddd'),
            'start' => $this->from->timezone('Asia/Jakarta')->format('H:i'),
            'end' => $this->to->timezone('Asia/Jakarta')->format('H:i'),
            'slot' => $this->slot,
            'canOnlineBook' => $this->canOnlineBook,
        ];
    }
}
