<?php

namespace App\Http\Controllers\API;

use App\Equipment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Resources\EquipmentResource;
use App\Http\Resources\InventoryResource;
use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return InventoryResource::collection(
            Inventory::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreInventoryRequest $request
     * @return InventoryResource
     */
    public function store(StoreInventoryRequest $request)
    {
        return new InventoryResource(
            Inventory::create($request->validated())
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return InventoryResource
     */
    public function show($id)
    {
        return new InventoryResource(
            Inventory::findOrFail($id)
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return EquipmentResource
     */
    public function update(Request $request, $id)
    {
        $equipment = Inventory::findOrFail($id);
        $equipment->update($request->all());

        return new EquipmentResource($equipment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return response()->json(['data' => ['deleted' => Equipment::destroy($id)]]);
    }
}
