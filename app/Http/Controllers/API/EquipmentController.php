<?php

namespace App\Http\Controllers\API;

use App\Equipment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEquipmentRequest;
use App\Http\Resources\EquipmentResource;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return EquipmentResource::collection(
            Equipment::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return EquipmentResource
     */
    public function store(StoreEquipmentRequest $request)
    {
        return new EquipmentResource(
            Equipment::create($request->validated())
        );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return EquipmentResource
     */
    public function show($id)
    {
        return new EquipmentResource(
            Equipment::findOrfail($id)
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return EquipmentResource
     */
    public function update(Request $request, $id)
    {
        $equipment = Equipment::findOrFail($id);
        $equipment->update($request->all());

        return new EquipmentResource($equipment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return response()->json(['data' => ['deleted' => Equipment::destroy($id)]]);
    }
}
