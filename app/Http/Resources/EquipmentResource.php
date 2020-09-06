<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'info' => $this->info,
            'inventory' => InventoryResource::collection($this->inventories),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }

}
