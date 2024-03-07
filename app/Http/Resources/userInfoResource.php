<?php

namespace App\Http\Resources;

use App\Models\Passengers;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\users;
class userInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function numFlight()
    {
        return Passengers::where('document_number', $this->document_number)->count();
    }


    public function toArray($request)
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'document_number' => $this->document_number,
            'count_flights' => $this->numFlight()
        ];
    }
}
