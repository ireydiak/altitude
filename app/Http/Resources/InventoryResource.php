<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class InventoryResource extends JsonResource
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
            'sku' => $this->sku,
            'info' => $this->info,
            'description' => $this->description,
            'notes' => $this->notes,
            'state' => $this->state,
            'price' => $this->price,
            'purchase_date' => $this->purchase_date,
            'equipment' => (new EquipmentResource($this->equipment))->toArray($request),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
