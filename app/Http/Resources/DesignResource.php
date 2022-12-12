<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DesignResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'full_name'   => $this->first_name . " " . $this->last_name,
            'url'         => $this->url,
            'note'        => $this->note,
            'date_start'  => $this->date_start,
            'date_finish' => $this->date_finish,
            'font_family' => $this->font_family,
            'url_example' => $this->url_example,
            'status'      => $this->status,
            'photo'       => photo($this->photo),
            'code'        => $this->code,
            'created_at'  => $this->created_at,
            'updated_at'  => $this->updated_at,
        ];
    }
}
